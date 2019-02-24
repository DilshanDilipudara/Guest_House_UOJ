<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('Uname');
            $table->string('Email')->unique();
            $table->string('Empno');
            $table->string('gender');
            $table->string('faculty');
            $table->string('Department');
            $table->string('Position');
            $table->string('Pno');
            $table->string('Crts');
            $table->string('Nicno');
            $table->string('Abill');
            $table->string('password');
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
