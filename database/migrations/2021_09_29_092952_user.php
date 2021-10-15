<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('last_name', 100)->nullable();
            $table->string('first_name', 100)->nullable();
            $table->string('middle_name', 100)->nullable();
            $table->string('gender', 50)->nullable();
            $table->string('birth_date', 40)->nullable();
            $table->string('address')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('employment_status', 50)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('password')->nullable();
            $table->string('highest_educational_attainment', 50)->nullable();
            $table->string('income')->nullable();
            $table->string('status', 30)->nullable();
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
        Schema::dropIfExists('user');
    }
}
