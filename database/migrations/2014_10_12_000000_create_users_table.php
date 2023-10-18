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
            $table->string('profile', 255);
            $table->string('type', 255);
            $table->string('status', 255);
            $table->string('fname', 255);
            $table->string('lname', 255);
            $table->string('age', 255);
            $table->string('gender', 255);
            $table->string('address', 255);
            $table->string('username', 255)->unique();
            $table->string('password', 255);
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
