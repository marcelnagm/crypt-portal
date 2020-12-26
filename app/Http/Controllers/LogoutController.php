<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signal;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    //
     public function logout(Request $request)
    {
     
    Auth::logout();
    return redirect('/');
    }
    
}
