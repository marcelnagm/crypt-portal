<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignals extends Migration
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
        });
        
        Schema::create('signals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pair_id');
            $table->unsignedFloat('entry_value');
            $table->unsignedFloat('target_1');
            $table->unsignedFloat('target_2')->nullable(true);
            $table->unsignedFloat('target_3')->nullable(true);
            $table->unsignedFloat('reached')->nullable(true);
            $table->unsignedFloat('stop');
            $table->unsignedFloat('stop_up');
            $table->smallInteger('status')->default(0);
            $table->timestamp('sended_at')->nullable(true);
            $table->unsignedBigInteger('created_by');
            $table->timestamps();
            $table->softDeletes();
        });
        
           DB::table('pairs')->insert([
            'pair' => 'TUSD/USDT' ,
        'main_coin' => 'USDT',
        'sec_coin' => 'TUSD',
        'min_quantity'=> 10,
        ]);  
           
           DB::table('signals')->insert([
            'pair_id' => 1 ,
        'entry_value' => 20,
        'target_1' => 25,
        'target_2' => 26,
        'target_3' => 27,
        'stop' => 18,
        'stop_up'=> 0.01,
        'created_by'=> 1,
          'status' => 0
        ]);    
           
           DB::table('signals')->insert([
            'pair_id' => 1 ,
        'entry_value' => 20,
        'target_1' => 25,
        'stop' => 18,
        'stop_up'=> 0.01,
        'created_by'=> 1,
        'sended_at' =>null              
        ]);  
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signals');
    }
}
