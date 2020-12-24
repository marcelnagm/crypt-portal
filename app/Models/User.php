<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\QueryException;
use App\Models\Profile;
use App\Models\Pair;
use App\Models\Configuration;

class User extends Authenticatable {

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

    public function profile() {
        return Profile::find($this->profile_id);
    }

    public function configuration() {
        return Configuration::where('user_id', $this->id)
                        ->get()[0];
    }

    public function signatures() {
        return UserSignature::where('user_id', $this->id)->get();
    }

    public function isAdmin() {
        return $this->profile()->name == "admin";
    }

    public function isTrader() {

        return $this->profile()->name == "trader";
    }

    public function isUser() {
        return $this->profile()->name == "user";
    }

    public function market() {
        $conf = $this->configuration();
        $exchange = new \ccxt\binance(array(
            'apiKey' => $conf->api_key, // replace with your keys
            'secret' => $conf->api_secret,
//    'verbose' => true,
            'enableRateLimit' => true,
            'timeout' => 30000,
        ));
        $market = $exchange->fetchMarkets();

        for ($i = 0; $i < count($market); $i++) {
//            dd($market[$i]);
            if ($market[$i]['quote'] == 'USDT') {
                try {
                    $pair = new Pair();
                    $pair->pair = $market[$i]['symbol'];
                    $pair->main_coin = $market[$i]['baseId'];
                    $pair->sec_coin = $market[$i]['quoteId'];
                    $pair->min_quantity = $market[$i]['limits']['amount']['min'];
                    $pair->save();
                } catch (QueryException $x) {
                    
                }
            }
        }
    }

    public function balance() {
        $conf = $this->configuration();
        $exchange = new \ccxt\binance(array(
            'apiKey' => $conf->api_key, // replace with your keys
            'secret' => $conf->api_secret,
//    'verbose' => true,
            'enableRateLimit' => true,
            'timeout' => 30000,
        ));
//$prices = $exchange->fetchTicker ($pairs);
        $balance = $exchange->fetchBalance();

//     var_dump($balance['free'][$pair->getMainCoin()]);
//        dd($balance);
        return $balance;
    }
    
    public function prices() {
        $conf = $this->configuration();
        $exchange = new \ccxt\binance(array(
            'apiKey' => $conf->api_key, // replace with your keys
            'secret' => $conf->api_secret,
//    'verbose' => true,
            'enableRateLimit' => true,
            'timeout' => 30000,
        ));
        $prices = array();
        foreach(Pair::all() as $pair){
            $prices[] =$pair.'';
        }
        $data = array();
        $pr = $exchange->fetchTickers($prices) ;
//        dd($pr);
        foreach($pr as $pri => $price){        
        $data[] = array(
          'symbol' => $price['info']['symbol'],
          'max' => $price['high'],
          'min' => $price['low'],
          'compra'=> $price['info']['askPrice'],
          'venda'=> $price['info']['bidPrice'],
        );
        }
//        dd($data);
//     var_dump($balance['free'][$pair->getMainCoin()]);
//        dd($balance);
        return $data;
    }

    public function notification(){
       return Notification::where('user_id',$this->id)->latest()->get();
    }
    
    
}
