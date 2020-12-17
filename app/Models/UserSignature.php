<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSignature extends Model
{
    use HasFactory;
 
    protected $table = 'users_signature';   
     protected $fillable = [
        'user_id',
        'signature_type_id',
        'start_at',
        'finish_at',
    ];
     
      protected $casts = [
        'start_at' => 'datetime',
        'finish_at' => 'datetime',
    ];
      
      
       public function user()
    {
        return $this->belongsTo(User::class,'id','user_id');
    }
}
