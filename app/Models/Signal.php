<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Signal extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'signals';

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
    protected $fillable = ['pair_id', 'entry_value', 
        'target_1',
        'target_2',
        'target_3',
        'stop', 'stop_up','created_by','sended_at'];

    public function getPair() {
        return Pair::find($this->pair_id);
    }

    public function getStatusName() {
        switch ($this->status) {
            case 1:
                return 'Gerado';
            default:
                return 'Em aberto';
        }
    }
    
        public function getCreatedBy() {
            return User::find($this->created_by);
        }

}
