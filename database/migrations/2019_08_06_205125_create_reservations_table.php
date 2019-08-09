<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('staff_id')->unsigned()->index();
            $table->unsignedBigInteger('room_no')->index();
            $table->string('name');
            $table->bigInteger('phone')->unsigned();
            $table->integer('duration');
            $table->date('check_in')->nullable();
            $table->date('check_out')->nullable();
            $table->integer('price');
            $table->timestamps();
            
            $table->foreign('room_no')->references('id')->on('roomservices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
