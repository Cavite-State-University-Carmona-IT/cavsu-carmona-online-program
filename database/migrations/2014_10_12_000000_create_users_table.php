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


            $table->string('email')->unique();
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();

            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->tinyInteger('gender')->nullable()->comment('ex. 0-male, 1-female');
            $table->date('birth_date')->nullable();
            $table->text('address')->nullable();
            $table->tinyInteger('marital_status')->nullable()->comment('ex. 1-single, 2-married, etc.');
            $table->tinyInteger('employment_status')->nullable()->comment('ex. 0-employed, 1-student, etc.');
            $table->string('username')->unique();
            $table->tinyInteger('highest_eduactional_attainment')->nullable()->comment('ex. 1 - high school, 2- bachelor, etc.');
            $table->integer('income')->nullable();
            $table->tinyInteger('status')->nullable();

            $table->timestamps();
            $table->softDeletes();
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
