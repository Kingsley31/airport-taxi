<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {

        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users');
		$table->string('transaction_ref');
        $table->string('booking_ref');
        $table->string('payment_type');
        $table->decimal('amount',9,3);
		$table->string('status');
		$table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
