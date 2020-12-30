<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopulareOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//          for ($i = 0; $i < 50; $i++) {
//            $timestamp = rand( strtotime("Nov 01 2020 00:00:00"), strtotime("Dec 31 2020 23:59:32") );
//            $random_Date = date("Y-m-d H:i:s", $timestamp );
//            DB::table('orders')->insert([
//            'user_id' => 3,
//            'pair_id' => rand(1,246),
//            'order_id' => rand(1,200),
//             'payed' => rand(1, 20),
//            'amount' => rand(1, 20),
//            'type_of' => rand(0, 1) ==1 ? 'buy': 'sell',            
//            'created_at' => $random_Date,
//            ]);
//          }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('populare_orders');
    }
}
