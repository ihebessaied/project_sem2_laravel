<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('admin')->default(0);
            $table->rememberToken();
            //cle etrangere
            $table->bigInteger('event_id')->unsigned()->default(1);
            $table->timestamps();
            //relation user et event
            $table->foreign('event_id')->references('id')->on('events')->onDelete('restrict')->onUpdate('restrict');
        });
    }   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
