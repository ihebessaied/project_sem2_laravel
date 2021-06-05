<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');//$table->integer('id')->primary()->unsigned();
            //$table->bigIncrements('id'); hathi par defaut ama ana nhibha id event
            $table->string('event_label');
            $table->string('event_place');
            $table->date('event_start');
            $table->date('event_finish');
            //cle etrangere
            $table->bigInteger('user_id')->unsigned()->nullable();
            //relation user et event
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('events');
    }
}
