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
    
       public function signature_type(){
           return SignatureType::find($this->signature_type_id);
       }
       
       public function isValid(){
           $t = time();
           if($t >= strtotime($this->start_at) && $t <= strtotime($this->finish_at)){
               return 'true';
           }else return 'false';
       }
    
}
