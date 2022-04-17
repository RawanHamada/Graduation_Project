<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_data', function (Blueprint $table) {
            $table->id();
            $table->integer('office_id');
            $table->integer('phoneuser');
            $table->string('emailuser',50);
            $table->foreign('emailuser')->references('email')->on('datausers');
            $table->string('emailowner',50);
            $table->foreign('emailowner')->references('email')->on('dataowners');

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
        Schema::dropIfExists('booking_data');
    }
}