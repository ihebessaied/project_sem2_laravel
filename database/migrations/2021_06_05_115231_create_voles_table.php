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
            $table->date('date_dpr')->format('m/d/Y');
            $table->date('date_arv')->format('m/d/Y');
            $table->string('lieu_depart');
            $table->string('lieu_arrivee');
            $table->string('avion');
            $table->string('prix');
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
