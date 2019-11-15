<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->unsignedBigInteger('user_id');
            $table->string('sex');
            $table->string('name');
            $table->date('birthDate');
            $table->string('idNo');
            $table->text('address');
            $table->integer('phone');
            $table->integer('mobile');
           
            $table->string('status');
            $table->integer('noChild');
            $table->string('husbandName');
            $table->string('husbandWork');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('people');
    }
}
