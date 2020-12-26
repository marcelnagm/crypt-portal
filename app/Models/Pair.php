<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pair extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pairs';
    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pair', 'main_coin', 'sec_coin', 'min_quantity'];

    public function __toString() {
        return $this->pair;
                
    }
}
