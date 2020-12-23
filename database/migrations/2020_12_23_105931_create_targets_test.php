<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTargetsTest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          DB::table('single_target')->insert([
            'user_id' => 3,
            'pair_id' => 1,
            'entry_value' => 19,
            'payed' => 18,
            'target' => 25,
            'target_p' => 0.315789474,
            'order_id_generated' => 4541,
            'balance' => 1,
            'stop' => 18,
            'stop_p' => 0.05,
            'stop_up' => 0.01,
            'finished' => 1,            
        ]);
          DB::table('single_target')->insert([
            'user_id' => 3,
            'pair_id' => 1,
            'entry_value' => 19,
            'payed' => 18,
            'target' => 25,
            'target_p' => 0.315789474,
            'order_id_generated' => 4541,
            'balance' => 1,
            'stop' => 18,
            'stop_p' => 0.05,
            'stop_up' => 0.1,
            'finished' => 0,            
        ]);
          
           DB::table('multiples_targets')->insert([
            'user_id' => 3,
            'pair_id' => 1,
            'entry_value' => 19,
            'payed' => 18,
            'target_1' => 20,
            'target_1_p' => 0.333,
            'target_2' => 22,
            'target_3' => 23,
            'order_id_generated' => 4541,
            'balance' => 1,
            'reached' => 22,
            'stop' => 18,
            'stop_p' => 0.05,
            'stop_up' => 0.1,
            'finished' => 1,            
        ]);
           DB::table('multiples_targets')->insert([
            'user_id' => 3,
            'pair_id' => 1,
            'entry_value' => 19,
            'payed' => 18,
            'target_1' => 20,
            'target_2' => 22,
            'target_3' => 23,
               'target_1_p' => 0.333,
            'order_id_generated' => 4541,
            'balance' => 1,
            'reached' => null,
            'stop' => 18,
            'stop_p' => 0.05,
            'stop_up' => 0.1,
            'finished' => 0,            
        ]);
           DB::table('multiples_targets')->insert([
            'user_id' => 3,
            'pair_id' => 1,
            'entry_value' => 19,
            'payed' => null,
            'target_1' => 20,
               'target_1_p' => 0.333,
            'target_2' => 22,
            'target_3' => 23,
            'order_id_generated' => null,
            'balance' => 1,
            'reached' => null,
            'stop' => 18,
             'stop_p' => 0.05,
            'stop_up' => 0.1,
            'finished' => 0,            
        ]);
          
          
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('targets_test');
    }
}
