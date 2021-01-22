<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingEstimatesTable extends Migration
{
    public function up()
    {
        Schema::create('booking_estimates', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('vehicle_type_id');
            $table->foreign('vehicle_type_id')->references('id')->on('vehicle_types');
            $table->integer('is_factory_fitted');
            $table->integer('has_ac');
            $table->decimal('price_per_kilo',9,3);
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('booking_estimates');
    }
}
