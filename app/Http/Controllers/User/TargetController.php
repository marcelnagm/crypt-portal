<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\MultipleTargets;
use App\Models\SingleTarget;
use App\Models\Pair;

class TargetController extends Controller
{
    //
    
      //
     public function index(Request $request)
    {
          $perPage = 25;
          $user = Auth::user();
        $signal = MultipleTargets::where('user_id',$user->id)
                ->latest()->paginate($perPage);
        $single = SingleTarget::where('user_id',$user->id)
                ->latest()->paginate($perPage);
        
                
        return view('user.signal.index', compact('signal','single'));
    }
    
     public function create() {

        $items = Pair::all();
        return view('user.signal.create', compact('items'));
    }
    
     public function store(Request $request) {

        $requestData = $request->all();
       
        $requestData['stop'] = $requestData['entry_value']*(1-($requestData['stop_p']/100));
        $requestData['stop_up'] = (($request['stop_up']/100));
        $requestData['user_id'] =   $request->user()->id;
        $requestData['balance'] =   $request->user()->configuration()->balance_operation;
        
        if(isset($requestData['target_2_p'])){ 
        $requestData['target_1'] = $requestData['entry_value']*(1+($requestData['target_1_p']/100));
        $requestData['target_2'] = $requestData['entry_value']*(1+($requestData['target_2_p']/100));
        $requestData['target_3'] = $requestData['entry_value']*(1+($requestData['target_3_p']/100));
        MultipleTargets::create($requestData);
       }else{
       $requestData['target'] = $requestData['entry_value']*(1+($requestData['target_1_p']/100));
       $requestData['target_p'] = $requestData['target_1_p'];
        SingleTarget::create($requestData);
       }
        return redirect('/user/op')->with('flash_message', 'Signal added!');
    }

       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {       
        if(isset($target->order_ir_generated)){
             $target = MultipleTargets::find($id);
          $val = $target->getOrder()->amount;
        $exchange = $user = Auth::user()->exchange();
        $order_bin = $exchange->createMarketOrder($target->getPair() . '', 'sell', $val, $ask);
        $order = new Orders();
        $order->user_id = Auth::user()->id;
        $order->pair_id = $this->pair_id;
//                $order->order_id = 4545;
        $order->order_id = $order_bin["info"]["orderId"];
        $order->type_of = 'sell';
//                $order->amount = 95215;
        $order->amount = $order_bin["info"]["executedQty"];
        $order->payed = $ask;
        $order->save();
        $target->finished = 1;
        $target->save();
        return redirect('/user/op')->with('flash_message', 'Foi efetuada uma venda forçada');
        }else{
             $target = MultipleTargets::destroy($id);
             return redirect('/user/op')->with('flash_message', 'Sinal excluido');
        }
    }
 
     public function edit($id) {
        $signal = MultipleTargets::findOrFail($id);
        $items = Pair::all();
        return view('user.signal.edit', compact('signal', 'items'));
    }
    
     public function update(Request $request, $id) {

        $requestData = $request->all();

        $signal = MultipleTargets::findOrFail($id);
          $requestData['target_1'] = $requestData['entry_value']*(1+($request['target_1_p']/100));
        $requestData['target_2'] = $requestData['entry_value']*(1+($request['target_2_p']/100));
        $requestData['target_3'] = $requestData['entry_value']*(1+($request['target_3_p']/100));
        $requestData['stop'] = $requestData['entry_value']*(1-($request['stop_p']/100));
        $signal->update($requestData);

        return redirect('/user/op')->with('flash_message', 'Signal updated!');
    }
    
}
