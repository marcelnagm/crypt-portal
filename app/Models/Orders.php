<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model

{

//    public $timestamps = false;
   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

   protected $fillable = [

       'user_id','order_id',  'type_of','pair_id','amount','payed'

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

   public function todo()

   {
       return $this->hasMany('Todo');

   }

   public function getPair(){
       return Pairs::find($this->pair_id);
   }
   
 }