<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
use App\Models\Configuration;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
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

        if (!empty($keyword)) {
            $user = User::latest()->paginate($perPage);
        } else {
            $user = User::latest()->paginate($perPage);
        }

        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if(!Auth::user()->isAdmin())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
        $items = \App\Models\Profile::all();
        return view('admin.user.create', compact('items'));
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
        $input =   $request->all();
         Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'whatsapp' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'max:255'],
        ])->validate();
        
        $us = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'whatsapp' => $input['whatsapp'],
            'auth_gmail' => 0,
            'profile_id' => $input['profile_id'],
            'password' => Hash::make($input['password']),
        ]);
        
        $conf = new Configuration();
        $conf->user_id = $us->id;
        $conf->save();

        return redirect('/admin/user/')->with('flash_message', 'User added!');
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
        $user = User::findOrFail($id);

        return view('admin.user.show', compact('user'));
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
        $user = User::findOrFail($id);
        $items = \App\Models\Profile::all();
        return view('admin.user.edit', compact('user','items'));
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
        
        $user = User::findOrFail($id);
        $user->update($requestData);

        return redirect('/admin/user/')->with('flash_message', 'User updated!');
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
        User::destroy($id);

        return redirect('/admin/user/')->with('flash_message', 'User deleted!');
    }
}
