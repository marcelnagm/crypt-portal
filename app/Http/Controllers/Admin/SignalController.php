<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Signal;
use App\Models\Pair;
use App\Models\User;
use App\Models\MultipleTargets;
use App\Models\SingleTarget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignalController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $signal = Signal::where('pair_id', 'LIKE', "%$keyword%")
                            ->orWhere('entry_value', 'LIKE', "%$keyword%")
                            ->orWhere('target', 'LIKE', "%$keyword%")
                            ->orWhere('stop', 'LIKE', "%$keyword%")
                            ->orWhere('stop_up', 'LIKE', "%$keyword%")
                            ->latest()->paginate($perPage);
        } else {
            $signal = Signal::latest()->paginate($perPage);
        }

        return view('admin.signal.index', compact('signal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {

        $items = Pair::all();
        return view('admin.signal.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function generate(Request $request) {

        if (isset($request->id)) {
            $signals = Signal::where('id', $request->id)->get();
        } else {
            $signals = Signal::where('status', '0')
                    ->get();
        }
//        $users = User::where('profile_id', 3)->join get();
    
        
                $users = User::select(
                         'users.id', 'configuration.balance_operation'
                        )
                        ->join('configuration', 'users.id', '=', 'configuration.user_id')
            ->where('profile_id','=',3)
            ->where('configuration.balance_operation','<>',null)
            ->where('configuration.bot_active','<>',null)
            ->where('configuration.exchange_id','<>',null)
            ->where('configuration.target_profile','<>',null)
            ->where('configuration.stop_loss','<>',null)
                        ->get();
//        dd($users);
                $j =0;
        foreach ($signals as $sign) {
            foreach ($users as $user) {
                if (isset($sign->target_2)) {
                    $mult = new MultipleTargets();
                    $mult->target_1 = $sign->target_1;
                    $mult->target_2 = $sign->target_2;
                    $mult->target_3 = $sign->target_3;
                    $mult->target_1_p = $sign->target_1_p;
                    $mult->target_2_p = $sign->target_2_p;
                    $mult->target_3_p = $sign->target_3_p;
                } else {
                    $mult = new SingleTarget();
                    $mult->target = $sign->target_1;
                    $mult->target_p = $sign->target_1_p;
                }
                $mult->pair_id = $sign->pair_id;
                $mult->entry_value = $sign->entry_value;
                $mult->stop = $sign->stop;
                $mult->stop_p = $sign->stop_p;
                $mult->stop_up = $sign->stop_up;
                $mult->user_id = $user->id;
                $mult->balance = $user->configuration()->balance_operation;
                $mult->save();       
                $j++;
            }
            $sign->status = 1;
            $sign->sended_at = DB::raw('now()');
            $sign->save();
        }
        $flash = 'Foram encontrados Usuarios Hab:'.count($user).'- Targets Gerados: '.$j;
        Session::flash('flash_message', 'This is a message!'); 
        return redirect('/admin/signal')->with('flash_message', 'targets gerados: '.$flash);
    }

    public function store(Request $request) {

        $requestData = $request->all();
        
        $requestData['target_1'] = $requestData['entry_value']*(1+($request['target_1_p']/100));
        $requestData['target_2'] = $requestData['entry_value']*(1+($request['target_2_p']/100));
        $requestData['target_3'] = $requestData['entry_value']*(1+($request['target_3_p']/100));
        $requestData['stop'] = $requestData['entry_value']*(1-($request['stop_p']/100));        
        $requestData['created_by'] = $request->user()->id;
        Signal::create($requestData);
        return redirect('/admin/signal')->with('flash_message', 'Signal added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $signal = Signal::findOrFail($id);

        return view('admin.signal.show', compact('signal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $signal = Signal::findOrFail($id);
        $items = Pair::all();
        return view('admin.signal.edit', compact('signal', 'items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id) {

        $requestData = $request->all();

        $signal = Signal::findOrFail($id);
          $requestData['target_1'] = $requestData['entry_value']*(1+($requestData['target_1_p']/100));
        $requestData['target_2'] = $requestData['entry_value']*(1+($requestData['target_2_p']/100));
        $requestData['target_3'] = $requestData['entry_value']*(1+($requestData['target_3_p']/100));
        $requestData['stop'] = $requestData['entry_value']*(1-($requestData['stop_p']/100));
        $signal->update($requestData);

        return redirect('/admin/signal')->with('flash_message', 'Signal updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {
        Signal::destroy($id);

        return redirect('/admin/signal')->with('flash_message', 'Signal deleted!');
    }

}
