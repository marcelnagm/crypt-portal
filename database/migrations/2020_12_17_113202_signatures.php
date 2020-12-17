<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Signatures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('users_signature', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('signature_type_id');
            $table->timestamp('start_at')->nullable();;
//            $table->timestamp('end_at')->nullable();;
            $table->timestamp('finish_at')->nullable();
            $table->timestamps();
            $table->index('signature_type_id');
            $table->index('user_id');
            $table->foreign('signature_type_id','fk_signature_type')->references('id')->on('signature_type');
//            $table->foreign('user_id','fk_user')->references('id')->on('user');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
