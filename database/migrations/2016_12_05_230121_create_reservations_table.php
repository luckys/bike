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
            $table->string('reservation_code')->unique();
            $table->string('renter_name');
            $table->string('renter_email');
            $table->string('renter_is_valid');
            $table->date('renter_birthday');
            $table->dateTime('rent_start');
            $table->dateTime('rent_end');
            $table->integer('rent_price');
            $table->integer('status');
            $table->text('options');
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
