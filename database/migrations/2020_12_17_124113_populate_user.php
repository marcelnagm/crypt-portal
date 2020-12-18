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
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'whatsapp' => Str::random(10),
            'auth_gmail' => '0',
            'profile_id' => 1,              
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
