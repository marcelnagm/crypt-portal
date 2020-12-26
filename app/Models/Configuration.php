<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'configuration';

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
    protected $fillable = ['user_id', 'exchange_id', 'user_id', 'api_key', 'api_secret', 'bot_active', 'balance_operation', 'target_profile', 'stop_loss', 'telegram_active', 'telegram_key'];

    
}
