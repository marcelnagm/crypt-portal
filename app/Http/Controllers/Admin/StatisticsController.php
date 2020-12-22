<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Signal;
use App\Http\Controllers\Admin\Controller;

class StatisticsController extends Controller
{
    //
     public function index(Request $request)
    {
     
            $signal = Signal::where('sended_at','<>','NULL')->get();
     echo count($signal);
        return view('statistics.index', compact('signal'));
    }
    
}
