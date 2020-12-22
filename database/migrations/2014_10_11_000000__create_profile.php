<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();            
            $table->string('name');
            $table->timestamps();
        });
        
         DB::table('profile')->insert([
            'name' => 'admin',
        ]);
         DB::table('profile')->insert([
            'name' => 'trader',
        ]);
         DB::table('profile')->insert([
            'name' => 'user',
        ]);
         DB::table('profile')->insert([
            'name' => 'pendente ativacao',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
