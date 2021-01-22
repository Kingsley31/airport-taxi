<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {

		$table->id();
		$table->string('vehicle_type');
		$table->string('name');
		$table->string('model');
		$table->string('color');
        $table->string('reg_number');
        $table->integer('is_assigned_to_driver');
        $table->unsignedBigInteger('driver_id')->nullable();
        $table->foreign('driver_id')->references('id')->on('drivers');
        $table->integer('approval_status');
        $table->integer('is_factory_fitted');
        $table->integer('has_ac');
		$table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
