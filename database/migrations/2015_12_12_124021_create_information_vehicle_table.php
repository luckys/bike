<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_vehicle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('information_id')->unsigned();
            $table->integer('vehicle_id')->unsigned();
            $table->string('value');
            $table->foreign('information_id')->references('id')->on('informations');
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
        Schema::drop('information_vehicle');
    }
}
