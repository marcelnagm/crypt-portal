<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNotificationGenerated extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_generated', function (Blueprint $table) {
            $table->smallInteger('type_id')->default(1);
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('message');
            $table->string('created_by');
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
        Schema::dropIfExists('table_notification_generated');
    }
}
