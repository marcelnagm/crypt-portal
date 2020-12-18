<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignatureType extends Model
{
    use HasFactory;
    
        protected $table = 'signature_type';   
     protected $fillable = [
        'name',
        'cost',
    ];
    
    public function __toString() {
        return ucwords($this->name) ;
    }
}
