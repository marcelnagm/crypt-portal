<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTargetsTest extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        
        
        for ($i = 0; $i < 6; $i++) {
            DB::table('signals')->insert([
                'created_by' => 1,
                'pair_id' => rand(1,246),
                'entry_value' => rand(1, 20),
                'target_1' => rand(1, 20),
                'target_1_p' => rand(0, 1) / 100,
                'target_2' => rand(20, 24),
                'target_2_p' => rand(0, 1) / 100,
                'target_3' => rand(20, 24),
                'target_3_p' => rand(0, 1) / 100,
                'stop' => rand(15, 18),
                'stop_p' => rand(0, 1) / 100,
                'stop_up' => rand(0, 1) / 100,
                'status' => rand(0, 1),
                'sended_at' => rand(0, 1) == 1 ? DB::raw('now()') : null,
            ]);
        }
        for ($i = 0; $i < 550; $i++) {
            $timestamp = rand( strtotime("Nov 01 2020 00:00:00"), strtotime("Dec 31 2020 23:59:32") );
            $random_Date = date("Y-m-d H:i:s", $timestamp );
            DB::table('multiples_targets')->insert([
            'user_id' => 3,
            'pair_id' => rand(1,246),
             'payed' => rand(1, 20),
            'entry_value' => rand(1, 20),
            'target_1' => rand(1, 20),
            'target_1_p' => rand(0, 1) / 100,
            'target_2' => rand(20, 24),
            'target_2_p' => rand(0, 1) / 100,
            'target_3' => rand(20, 24),
            'target_3_p' => rand(0, 1) / 100,
            'stop' => rand(15, 18),
            'stop_p' => rand(0, 1) / 100,
            'stop_up' => rand(0, 1) / 100,
            'order_id_generated' => 4541,
            'balance' => 1,
            'signal_id' => rand(1, 6),
                'reached' => 22,
            'stop' => 18,
            'stop_p' => 0.05,
            'stop_up' => 0.1,
            'finished' => 1,
            'created_at' => $random_Date,
            ]);
            $timestamp = rand( strtotime("Nov 01 2020 00:00:00"), strtotime("Dec 31 2020 23:59:32") );
            $random_Date = date("Y-m-d H:i:s", $timestamp );
            DB::table('multiples_targets')->insert([
                'user_id' => 3,
                'pair_id' => rand(1,246),
                'payed' => rand(1, 20),
                'entry_value' => rand(1, 20),
                'target_1' => rand(1, 20),
                'target_1_p' => rand(0, 1) / 100,
                'target_2' => rand(20, 24),
                'target_2_p' => rand(0, 1) / 100,
                'target_3' => rand(20, 24),
                'target_3_p' => rand(0, 1) / 100,
                'stop' => rand(15, 18),
                'stop_p' => rand(0, 1) / 100,
                'stop_up' => rand(0, 1) / 100,
                'signal_id' => rand(1, 6),
                'order_id_generated' => null,
                'balance' => 1,
                'reached' => null,
                'finished' => 0,                
               'created_at' => $random_Date,
            ]);
            $t = array(
                '0' => rand(1, 20),
                '1' => rand(1, 20),
                '2' => rand(1, 20),
            );
            $timestamp = rand( strtotime("Nov 01 2020 00:00:00"), strtotime("Dec 31 2020 23:59:32") );
            $random_Date = date("Y-m-d H:i:s", $timestamp );
            DB::table('multiples_targets')->insert([
                'user_id' => 3,
                'pair_id' => rand(1,246),
                'payed' => 0,
                'entry_value' => rand(1, 20),
                'target_1' => $t[0],
                'target_1_p' => rand(0, 1) / 100,
                'target_2' => $t[1],
                'target_2_p' => rand(0, 1) / 100,
                'target_3' => $t[2],
                'target_3_p' => rand(0, 1) / 100,
                'stop' => rand(15, 18),
                'stop_p' => rand(0, 1) / 100,
                'stop_up' => rand(0, 1) / 100,
                'order_id_generated' => 4321,
                'signal_id' => rand(1, 6),
                'balance' => 1,
                'reached' => $t[rand(0,2)],
                'finished' => 0,                
                'created_at' => $random_Date,
            ]);
        }
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
