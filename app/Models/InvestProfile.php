<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestProfile extends Model
{
    use HasFactory;
    
     protected $table = 'invest_profile';
    protected $timestamp = false;
    
    protected $fillable = ['name','target_sell'];
    
    public function __toString() {
        return $this->name;
    }
    
}
