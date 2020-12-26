<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pair as Pairs;


use Illuminate\Support\Facades\Auth;

class MultipleTargets extends Model
{
    use HasFactory;
    
      public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'multiples_targets';
    protected $fillable = [
        'pair_id', //defined on the table pairs 
        'entry_value',
        'payed',
        'user_id', 
        'target_1', 'target_2', 'target_3',
        'target_1_p', 'target_2_p', 'target_3_p',
        'reached',
        'order_id_generated',
        'balance',
        'stop',
        'stop_p',
        'stop_up'
        , 'finished'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
//        'entry_value',
//        'remember_token',
    ];

    /**
     * return order associated with this objhect
     * @return Orders
     */
    public function getOrder() {
        return Orders::find($this->order_id_generated);
    }

    public function getPair() {
        return Pairs::find($this->pair_id);
    }
    
     public function getStatusName() {
        if(isset($this->payed) && $this->finished == 1)
            return 'Finalizado';
        if(isset($this->payed) && $this->finished == 0){
            if($this->reached == $this->target_1)
                return 'Para Venda - Em target 1';
            if($this->reached == $this->target_2)
                return 'Para Venda - Em target 2';
            if($this->reached == $this->target_3)
                return 'Para Venda - Em target 3';
           return 'Para Venda - não alcançado'; 
        }
            
        if(!isset($this->payed))
            return 'Para Compra';
    }
    
     public function getTargetP($formatted ,$target ) {
         switch($target){
             case 1:
                 $t =$this->target_1;
                 break;
             case 2:
                 $t =$this->target_2;
                 break;
             case 3:
                 $t =$this->target_3;
                 break;
         }
         
         $val =(($t/$this->entry_value)*100)-100;
         
         if($formatted) 
             return number_format($val,3);
         else
         return $val;
     }
     
     
    public function getPercent($buy, $current)
    {
        if ($buy == 0 || $current == 0)
            return null;
        return (($current - $buy) * 100) / $current;
    }
    
    public function getProfit(){
        if($this->payed != null){   
            $act =Auth::user()->price($this->pair_id);
            
            return number_format($this->getPercent($this->payed , $act['venda']) *100,4);
        }else return null;
    }
            
}
