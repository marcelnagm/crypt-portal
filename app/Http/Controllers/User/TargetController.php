<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\MultipleTargets;
use App\Models\Pair;

class TargetController extends Controller
{
    //
    
      //
     public function index(Request $request)
    {
          $user = Auth::user();
        $signal = \App\Models\MultipleTargets::where('user_id',$user->id)->get();
        return view('user.signal.index', compact('signal'));
    }
    
     public function create() {

        $items = Pair::all();
        return view('user.signal.create', compact('items'));
    }
    
     public function store(Request $request) {

        $requestData = $request->all();
        $requestData['target_1'] = $requestData['entry_value']*(1+($requestData['target_1_p']/100));
        $requestData['target_2'] = $requestData['entry_value']*(1+($requestData['target_2_p']/100));
        $requestData['target_3'] = $requestData['entry_value']*(1+($requestData['target_3_p']/100));
        $requestData['stop'] = $requestData['entry_value']*(1-($requestData['stop_p']/100));
        $requestData['stop_up'] = (($request['stop_up']/100));
        $requestData['user_id'] =   $request->user()->id;
        $requestData['balance'] =   $request->user()->configuration()->balance_operation;
        MultipleTargets::create($requestData);

        return redirect('/user/op')->with('flash_message', 'Signal added!');
    }

       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {
        MultipleTargets::destroy($id);

        return redirect('/user/op')->with('flash_message', 'Signal deleted!');
    }
 
     public function edit($id) {
        $signal = MultipleTargets::findOrFail($id);
        $items = Pair::all();
        return view('user.signal.edit', compact('signal', 'items'));
    }
    
     public function update(Request $request, $id) {

        $requestData = $request->all();

        $signal = MultipleTargets::findOrFail($id);
          $requestData['target_1'] = $requestData['entry_value']*(1+($request['target_1_p']/100));
        $requestData['target_2'] = $requestData['entry_value']*(1+($request['target_2_p']/100));
        $requestData['target_3'] = $requestData['entry_value']*(1+($request['target_3_p']/100));
        $requestData['stop'] = $requestData['entry_value']*(1-($request['stop_p']/100));
        $signal->update($requestData);

        return redirect('/user/op')->with('flash_message', 'Signal updated!');
    }
    
}
