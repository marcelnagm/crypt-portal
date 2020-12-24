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
        
        Schema::create('signals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pair_id');
            $table->unsignedFloat('entry_value');
            $table->unsignedFloat('target_1');            
            $table->unsignedFloat('target_1_p');
            $table->unsignedFloat('target_2')->nullable(true);            
            $table->unsignedFloat('target_2_p')->nullable(true);
            $table->unsignedFloat('target_3')->nullable(true);            
            $table->unsignedFloat('target_3_p')->nullable(true);
            $table->unsignedFloat('reached')->nullable(true);
            $table->unsignedFloat('stop');
            $table->unsignedFloat('stop_p');
            $table->unsignedFloat('stop_up');
            $table->smallInteger('status')->default(0);
            $table->timestamp('sended_at')->nullable(true);
            $table->unsignedBigInteger('created_by');
            $table->timestamps();
            $table->softDeletes();
        });
        
            
        
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
