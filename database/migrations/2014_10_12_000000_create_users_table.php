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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('birthday');
            $table->string('state');
            $table->string('matric');
            $table->string('city');
            $table->string('address')->nullable();
            $table->string('phone_number');
            $table->string('depart');
            $table->enum('level', ['Hnd2', 'Hnd1', 'Nd2', 'Nd1']);
            $table->enum('program', ['FT', 'Dpp', 'PT']);
            $table->enum('gender', ['Male', 'Female', 'Unknown']);
            $table->enum('relationship', ['Single', 'Married', 'Divorced', 'Widowed']);
            $table->char('dp');
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
