<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invest_profile', function (Blueprint $table) {
            $table->id();            
            $table->string('name',50);
            $table->string('target_sell',50);
            $table->timestamps();
        });
        
        DB::table('invest_profile')->insert([
            'name' => 'Perfil Conservador',
            'target_sell' => 'target_1',
        ]);
        DB::table('invest_profile')->insert([
            'name' => 'Perfil Moderado',
            'target_sell' => 'target_2',
        ]);
        DB::table('invest_profile')->insert([
            'name' => 'Perfil Agressivo',
            'target_sell' => 'target_3',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invest_profile');
    }
}
