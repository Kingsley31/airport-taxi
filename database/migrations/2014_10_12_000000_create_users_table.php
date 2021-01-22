<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
		    $table->string('avatar_url')->nullable();
            $table->string('email')->unique();
            $table->string('verification_code')->nullable();
            $table->integer('is_verified');
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('country_code');
            $table->string('phone');
            $table->string('role');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
