<?php

namespace App\Http\Controllers\User;

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
        session(['balance' => $request->user()->balance()['free']]);
        
       return  view('layout_user');
    }
}
