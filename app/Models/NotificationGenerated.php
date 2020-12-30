<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationGenerated extends Model
{
    use HasFactory;
    
     protected $table = 'notification_generated';
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
    protected $fillable = ['user_id', 'type_id', 'title','message', 'created_by'];

    public function getUserId() {
         switch($this->user_id){
            case 1:
                return 'Todos';            
            case 2:
                return 'Admin';            
            case 3:
                return 'Traders';            
            case 4:
                return 'Usuarios';            
        }
    }
}
