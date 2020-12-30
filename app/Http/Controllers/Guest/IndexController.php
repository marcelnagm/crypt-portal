<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
       if(!Auth::user()->isGuest())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
       return  view('guest.index');
    }
}
