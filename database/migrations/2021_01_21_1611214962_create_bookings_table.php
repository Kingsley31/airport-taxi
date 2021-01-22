<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {

        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users');
		$table->string('booking_type');
        $table->string('ref_number');
        $table->decimal('pickup_lat',11,7);
        $table->decimal('pickup_long',11,7);
        $table->string('pickup_address');
        $table->decimal('dropoff_lat',11,7);
        $table->decimal('dropoff_long',11,7);
        $table->string('dropoff_address');
        $table->integer('kilometer');
        $table->decimal('amount',9,3);
        $table->decimal('discount',9,3);
		$table->string('status');
		$table->timestamp('pickup_date');
        $table->string('pickup_time');
        $table->timestamp('dropoff_date')->nullable();
        $table->string('dropoff_time')->nullable();
        $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
