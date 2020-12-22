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
            'email' => 'm@m.com',
            'password' => Hash::make('123'),
            'whatsapp' => Str::random(10),
            'auth_gmail' => '0',
            'profile_id' => 1,              
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
