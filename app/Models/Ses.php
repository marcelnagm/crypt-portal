<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ses extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sessions';
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

}
