<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            //user field
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->bigInteger('pin')->nullable();;
            $table->bigInteger('reset_pin')->nullable();

            // otp field
            $table->string('mobile')->unique();
            $table->integer('otp')->nullable();
            $table->string('expire_at')->nullable();

            //location field
            $table->string('type_of_business')->nullable();

            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('road')->nullable();
            $table->string('house')->nullable();
            $table->string('zipcode')->nullable();
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
};
