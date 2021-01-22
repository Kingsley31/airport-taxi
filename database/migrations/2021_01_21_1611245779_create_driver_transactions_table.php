<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('driver_transactions', function (Blueprint $table) {

        $table->id();
        $table->unsignedBigInteger('driver_id');
        $table->foreign('driver_id')->references('id')->on('drivers');
        $table->unsignedBigInteger('booking_id')->nullable();
        $table->foreign('booking_id')->references('id')->on('bookings');
        $table->string('type');
        $table->decimal('amount',9,3);
        $table->decimal('balance_before',9,3);
        $table->decimal('balance_after',9,3);
        $table->string('status');
        $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('driver_transactions');
    }
}
