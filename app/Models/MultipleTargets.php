<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'user_id', 'target_1', 'target_2', 'target_3',
        'reached',
        'order_id_generated',
        'balance',
        'stop',
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
}
