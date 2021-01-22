<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {

        $table->id();
		$table->string('full_name');
		$table->string('avatar_url')->nullable();
		$table->string('email')->unique();
        $table->string('password');
        $table->decimal('balance',9,3);
        $table->decimal('last_location_lat',11,7);
        $table->decimal('last_location_long',11,7);
        $table->string('verification_code')->nullable();
        $table->integer('is_available');
        $table->integer('is_verified');
		$table->string('address')->nullable();
        $table->string('gender')->nullable();
        $table->string('country_code');
		$table->string('phone');
		$table->string('bank_name')->nullable();
		$table->string('bank_account_name')->nullable();
		$table->string('bank_account_number')->nullable();
		$table->string('bvn')->nullable();
        $table->string('driving_lincense_url')->nullable();
        $table->rememberToken();
		$table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
