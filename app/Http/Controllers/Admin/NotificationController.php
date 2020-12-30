<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if(!Auth::user()->isAdmin())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
        $keyword = $request->get('search');
        $perPage = 25;
        $user = Auth::user();
        if (!empty($keyword)) {
            $notification = Notification::where('type_id', 'LIKE', "%$keyword%")
                ->where('user_id',$user->id)
                ->orWhere('title', 'LIKE', "%$keyword%")
                ->orWhere('message', 'LIKE', "%$keyword%")
                ->orWhere('readed', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $notification = Notification::where('user_id',$user->id)->latest()->paginate($perPage);
        }

        return view('admin.notification.index', compact('notification'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if(!Auth::user()->isAdmin())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
             return view('admin.notification.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        if(!Auth::user()->isAdmin())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
        $requestData = $request->all();
        switch($requestData['user_id']){
            case 1:
                $users = User::where('profile_id',1)
                               ->orWhere('profile_id',2) 
                               ->orWhere('profile_id',3)                     
                    ->get();
            break;    
            case 2:
                $users = User::where('profile_id','1')->get();
            break;    
            case 3:
                $users = User::where('profile_id','2')->get();
            break;    
            case 4:
                $users = User::where('profile_id','3')->get();
            break;                    
        }
//        dd($ussers);
        foreach ($users as $user){
            $requestData['user_id'] = $user->id;
            Notification::create($requestData);            
        }

        return redirect('/admin/notification')->with('flash_message', 'Message added!');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        if(!Auth::user()->isAdmin())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
        $notification = Notification::findOrFail($id);

        return view('admin.notification.show', compact('notification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        if(!Auth::user()->isAdmin())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
        $notification = Notification::findOrFail($id);
        $notification->readed = 1;
        $notification->save();
        return redirect('/admin/notification')->with('flash_message', 'Notification updated!');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        if(!Auth::user()->isAdmin())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
        $requestData = $request->all();
        
        $notification = Notification::findOrFail($id);
        $notification->update($requestData);

        return redirect('/admin/notification')->with('flash_message', 'Notification updated!');
    }
    
    public function allRead(Request $request){
        $user = Auth::user();
        DB::statement('UPDATE `notification` SET `readed`=1 where user_id = '.$user->id);
        
        return redirect('/admin/dashboard')->with('flash_message', 'Todas Lidas!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        if(!Auth::user()->isAdmin())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
        Notification::destroy($id);

        return redirect('/admin/notification')->with('flash_message', 'Notification deleted!');
    }
}
