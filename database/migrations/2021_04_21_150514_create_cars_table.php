<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricule');
            $table->bigInteger('modele_id')->unsigned()->index();
            $table->string('description');
            $table->integer('nbplace');
            $table->String("image");
            $table->integer('mane_game');
            $table->float('prix');
            $table->date('date_get')->default(NULL);
            $table->date('date_return')->default(NULL);
            $table->float('penalite')->default(NULL);
            $table->float('beforepenalite')->default(NULL);

            $table->timestamps();
            $table->foreign('modele_id')->references('id')->on('modeles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
} 

