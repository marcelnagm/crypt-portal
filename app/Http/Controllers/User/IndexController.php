<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

use App\Models\Orders;

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
        $start_date = date('Y-m-d H:i:s');
        $date = strtotime($start_date);
        $date = strtotime("-1 day", $date);
        $week = date('Y-m-d H:i:s', $date);
        
        $data = array();
        
        $data['operations_day']  = Orders::where('created_at','>=',$week)->count();
        
        $val = DB::select('SELECT sum(payed) as payed,sum(reached) as profit FROM `multiples_targets` WHERE payed is not null and (updated_at >='."'$week'"
                . 'or created_at >='."'$week'"
                . ")");
        $val = json_decode(json_encode($val), true)[0];
        
        
        $data['profitability_day'] = $val['payed'] >0? $val['profit'] / $val['payed']: $val['profit'] ;
        
        if($data['profitability_day'] != null ){
        $data['profitability_day'] = $data['profitability_day'] >= 1 ? ($data['profitability_day'] - 1) * 100 : -((1-$data['profitability_day']) * 100);
        }else{
            $data['profitability_day'] = 0;
        }
        $data['profitability_day'] = number_format(($data['profitability_day']), 2);

       return  view('user.index', compact('data'));
    }
}
