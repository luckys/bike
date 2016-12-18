<?php

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
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('renter_name');
            $table->string('renter_email');
            $table->dateTime('rent_start');
            $table->dateTime('rent_end');
            $table->integer('rent_price');
            $table->integer('status');
            $table->text('options');
            $table->text('notes');
            $table->boolean('tos');
            $table->integer('vehicle_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservations');
    }
}
