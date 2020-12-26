<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    use HasFactory;
    
    protected $table = 'exchange';
    protected $timestamp = false;
    
    protected $fillable = ['name'];
    
    public function __toString() {
        return $this->name;
    }
}
