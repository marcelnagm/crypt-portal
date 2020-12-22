<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class PopulateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          DB::table('signature_type')->insert([
            'name' => 'bronze',
            'cost' => '129.90',
        ]);
        DB::table('signature_type')->insert([
            'name' => 'prata',
            'cost' => '159.90',
        ]);
        DB::table('signature_type')->insert([
            'name' => 'ouro',
            'cost' => '189.90',
        ]);
          DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'a@a.com',
            'password' => Hash::make('123'),
            'whatsapp' => Str::random(10),
            'auth_gmail' => '0',
            'profile_id' => 1,              
        ]);
          DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 't@t.com',
            'password' => Hash::make('123'),
            'whatsapp' => Str::random(10),
            'auth_gmail' => '0',
            'profile_id' => 2,              
        ]);
          DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'u@u.com',
            'password' => Hash::make('123'),
            'whatsapp' => Str::random(10),
            'auth_gmail' => '0',
            'profile_id' => 3,              
        ]);
          DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'u2@u.com',
            'password' => Hash::make('123'),
            'whatsapp' => Str::random(10),
            'auth_gmail' => '0',
            'profile_id' => 3,              
        ]);
          
          DB::table('users_signature')->insert([
            'user_id' => 1 ,
        'signature_type_id' => 1,
        'start_at' => '2020-12-01 17:47:15',
        'finish_at'=> '2020-12-03 17:47:15',
        ]);  
          DB::table('users_signature')->insert([
            'user_id' => 1 ,
        'signature_type_id' => 3,
        'start_at' => '2020-12-01 17:47:15',
        'finish_at'=> '2020-12-24 17:47:15',
        ]);  
          
          DB::table('configuration')->insert([
            'user_id' => 1,
        ]);
          DB::table('configuration')->insert([
            'user_id' => 2,
        ]);
          DB::table('configuration')->insert([
            'user_id' => 3,
            'balance_operation' => 0.5  ,
              'bot_active' => 1,
              'exchange_id' => 1,
              'exchange_id' => 1,
              'stop_loss' => 1,
        ]);
          DB::table('configuration')->insert([
            'user_id' => 4,
            'balance_operation' => 0.4
        ]);
          
          
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
