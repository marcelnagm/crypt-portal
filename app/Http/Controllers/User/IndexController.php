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
        if(!Auth::user()->isUser())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
        session(['balance' => $request->user()->balance()['free']]);
        if($request->user()->signatures_valid() <1) {
            
            session('blocked', 1);
            session('flash_message','Assinatura Expirada');
        }
       return  view('user.index');
    }
}
