<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingAssignmentsTable extends Migration
{
    public function up()
    {
        Schema::create('booking_assignments', function (Blueprint $table) {

        $table->id();
        $table->unsignedBigInteger('booking_id');
        $table->foreign('booking_id')->references('id')->on('bookings');
        $table->unsignedBigInteger('driver_id');
        $table->foreign('driver_id')->references('id')->on('drivers');
        $table->string('status');
		$table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('booking_assignments');
    }
}
