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
       return  view('guest.index');
    }
}
