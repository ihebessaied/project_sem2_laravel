<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_dpr');
            $table->date('dated_arv');
            $table->string('lieu_depart');
            $table->string('lieu_arrivee');
            $table->string('avion');
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
        Schema::dropIfExists('voles');
    }
}
