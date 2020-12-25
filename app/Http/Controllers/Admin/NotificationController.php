<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Notification;
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
    public function show($id)
    {
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
        Notification::destroy($id);

        return redirect('/admin/notification')->with('flash_message', 'Notification deleted!');
    }
}
