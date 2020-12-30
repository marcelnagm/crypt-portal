<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Signal;
use App\Models\MultipleTargets;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller {

    //
    public function index(Request $request) {
if(!Auth::user()->isAdmin())return redirect('/dashboard')->with('flash_message', 'Acesso Não autorizado!');
        $data = array();
        $data['count_all_signal'] = Signal::count();
        $data['count_all_signal_open'] = Signal::where('status', 0)->count();
        $data['count_all_target'] = MultipleTargets::count();
        $val = DB::select('SELECT count(id) as cont FROM `multiples_targets` WHERE `reached` = `target_1`');
        $val = json_decode(json_encode($val), true);
        $data['count_all_target_1'] = number_format(
                ($val[0]['cont'] / $data['count_all_target']) * 100
                , 2);
        $val = DB::select('SELECT count(id) as cont FROM `multiples_targets` WHERE `reached` = `target_2`');
        $val = json_decode(json_encode($val), true);
        $data['count_all_target_2'] = number_format(
                ($val[0]['cont'] / $data['count_all_target']) * 100
                , 2);
        $val = DB::select('SELECT count(id) as cont FROM `multiples_targets` WHERE `reached` = `target_3`');
        $val = json_decode(json_encode($val), true);
        $data['count_all_target_3'] = number_format(
                ($val[0]['cont'] / $data['count_all_target']) * 100
                , 2);
        $data['count_all_target_sucess'] = ($data['count_all_target_1'] + $data['count_all_target_2'] + $data['count_all_target_3'] ) / $data['count_all_target'];
        $data['count_all_target_sucess'] = number_format($data['count_all_target_sucess'] * 100, 2);


        $val = DB::select('SELECT sum(payed) as payed,sum(reached) as profit FROM `multiples_targets` WHERE payed is not null ');
        $val = json_decode(json_encode($val), true)[0];

        $data['profitability_all'] = $val['profit'] / $val['payed'];
        $data['profitability_all'] = $data['profitability_all'] >= 1 ? ($data['profitability_all'] - 1) * 100 : -((1-$data['profitability_all']) * 100);
        $data['profitability_all'] = number_format(($data['profitability_all']), 2);
        
        $start_date = date('Y-m-d H:i:s');
        $date = strtotime($start_date);
        $date = strtotime("-7 day", $date);
        $week = date('Y-m-d H:i:s', $date);
        
        $val = DB::select('SELECT sum(payed) as payed,sum(reached) as profit FROM `multiples_targets` WHERE payed is not null and created_at >='."'$week'");
        $val = json_decode(json_encode($val), true)[0];
//        dd($val);
        $data['profitability_week'] = $val['profit'] / $val['payed'];
        $data['profitability_week'] = $data['profitability_week'] >= 1 ? ($data['profitability_week'] - 1) * 100 : -((1-$data['profitability_week']) * 100);
        $data['profitability_week'] = number_format(($data['profitability_week']), 2);


        $date = strtotime($start_date);
        $date = strtotime("-30 day", $date);
        $week = date('Y-m-d H:i:s', $date);
        
        $val = DB::select('SELECT sum(payed) as payed,sum(reached) as profit FROM `multiples_targets` WHERE payed is not null and created_at >='."'$week'");
        $val = json_decode(json_encode($val), true)[0];
//        dd($val);
        $data['profitability_month'] = $val['profit'] / $val['payed'];
        $data['profitability_month'] = $data['profitability_month'] >= 1 ? ($data['profitability_month'] - 1) * 100 : -((1-$data['profitability_month']) * 100);
        $data['profitability_month'] = number_format(($data['profitability_month']), 2);

        $val = DB::select('select a.id,a.profit,a.payed,(a.profit / a.payed) as liquid from 
        (SELECT `pair_id` as id , sum(payed) as payed,sum(reached) as profit FROM `multiples_targets` WHERE `payed` IS NOT null GROUP by `pair_id`) as a order by liquid desc');
        $val = json_decode(json_encode($val), true);
//        dd($val);
        $data['pair_data'] = $val;

        return view('admin.statistics.index', compact('data'));
    }

}
