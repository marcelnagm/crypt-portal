<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePairs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        
        Schema::create('pairs', function (Blueprint $table) {
            $table->id();
            $table->string('pair',20);
            $table->string('main_coin',20);
            $table->string('sec_coin',20);
            $table->float('min_quantity');            
            $table->timestamps();
            $table->unique('pair');
        });
        
           DB::table('pairs')->insert([
            'pair' => 'TUSD/USDT' ,
        'main_coin' => 'USDT',
        'sec_coin' => 'TUSD',
        'min_quantity'=> 10,
        ]);
           
           DB::table('pairs')->insert([
            'pair' => 'BTC/USDT' ,
        'main_coin' => 'BTC',
        'sec_coin' => 'USDT',
        'min_quantity'=> 10,
        ]);  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pairs');
    }
}
