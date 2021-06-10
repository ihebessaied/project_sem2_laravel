<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('taken_time')->default(NULL);
            $table->date('return_time')->default(NULL);
            $table->bigInteger('user_id')->unsigned()->index(); // this is working
            $table->bigInteger('car_id')->unsigned()->index();
            
            $table->timestamps();

        });
        Schema::table('commandes', function(Blueprint $table) {
            //$table->foreign('user_id')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            //error: mte3 Foreig key    error: :1215
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
