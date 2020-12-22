<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuration', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('exchange_id')->nullable(true);;
            $table->string('api_key','100')->nullable(true);;
            $table->string('api_secret',100)->nullable(true);;
            $table->string('bot_active',1)->nullable(true);;
            $table->float('balance_operation')->nullable(true);
            $table->smallInteger('target_profile')->nullable(true);;
            $table->float('stop_loss')->nullable(true);;
            $table->string('telegram_active',1)->default('0');
            $table->string('telegram_key','100')->nullable(true);
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
        Schema::dropIfExists('configuration');
    }
}
