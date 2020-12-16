<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    
      public function create() {
        return view('layout');
    }
    
    public function store(Request $request) {
        echo 'tututu';
        return dd($request->all());
    }
    
}
