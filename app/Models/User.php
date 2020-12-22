<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Profile;

use App\Models\Configuration;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'whatsapp',
        'auth_gmail',
        'profile_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    
    
    public function profile(){
    return Profile::find($this->profile_id);
    }
    
    public function configuration(){
    return Configuration::where('user_id', $this->id)
                    ->get()[0];
    }
    
    public function signatures(){
          return UserSignature::where('user_id',$this->id)->get();
    }
    
    public function isAdmin(){
        return $this->profile()->name == "admin";
    }
    
    public function isTrader(){
        
        return $this->profile()->name == "trader";
    }
    
    public function isSignal(){
        return $this->profile()->name == "user";
    }
    
    
}
