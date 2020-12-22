<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTargets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multiples_targets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pair_id');
            $table->unsignedFloat('entry_value');
            $table->unsignedFloat('payed')->nullable(true);
            $table->unsignedFloat('target_1');
            $table->unsignedFloat('target_2')->nullable(true);
            $table->unsignedFloat('target_3')->nullable(true);
            $table->unsignedFloat('reached')->nullable(true);
            $table->unsignedInteger('order_id_generated')->nullable(true);
            $table->unsignedFloat('balance');
            $table->unsignedFloat('stop');
            $table->unsignedFloat('stop_up');
            $table->smallInteger('finished')->default(0);
            $table->timestamps();
        });
        Schema::create('single_target', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pair_id');
            $table->unsignedFloat('entry_value');
            $table->unsignedFloat('payed')->nullable(true);
            $table->unsignedFloat('target');
            $table->unsignedInteger('order_id_generated')->nullable(true);
            $table->unsignedFloat('balance');
            $table->unsignedFloat('stop');
            $table->unsignedFloat('stop_up');
            $table->smallInteger('finished')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_targets');
    }
}
