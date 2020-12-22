<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleTarget extends Model
{
    use HasFactory;
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'single_target';
    protected $fillable = [
        'user_id', 'pair_id', 'order_id_generated', 'balance',
        'entry_value',
        'payed',
        'target', 'stop', 'stop_up'
        , 'finished'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
//       'password', 'remember_token',
    ];

    /*
     * Get Todo of User
     *
     */

    public function todo() {
        return $this->hasMany('Todo');
    }

    /**
     * return pair associated with this objhect
     * @return Pairs
     */
    public function getPair() {
        return Pairs::find($this->pair_id);
    }

    /**
     * return order associated with this objhect
     * @return Orders
     */
    public function getOrder() {
        return Orders::find($this->order_id_generated);
    }

}
