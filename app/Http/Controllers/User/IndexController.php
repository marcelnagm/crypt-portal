<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
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
        if($request->user()->signatures_valid() <1) {
            
            session('blocked', 1);
            session('flash_message','Assinatura Expirada');
        }
       return  view('layout_user');
    }
}
