<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signal;

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
