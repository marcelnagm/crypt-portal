<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class PopulateNotification extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       
//          DB::table('notification')->insert([
//            'user_id' => '3',
//            'type_id' => 1,
//            'title' => 'Novo Sinal',
//            'message' => 'Sinal de USD/CAD',
//            'readed' => 1,
//        ]);
//          DB::table('notification')->insert([
//            'user_id' => '3',
//            'type_id' => 2,
//            'title' => 'Novo Sinal',
//            'message' => 'Sinal de USD/CAD',
//            'readed' => 1,
//        ]);
//          DB::table('notification')->insert([
//            'user_id' => '3',
//            'type_id' => 3,
//            'title' => 'Novo Sinal',
//            'message' => 'Sinal de USD/CAD',
//            'readed' => 1,
//        ]);
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
