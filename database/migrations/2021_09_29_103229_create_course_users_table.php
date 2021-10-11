<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_users', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('user_id')->nullable()->unsigned();
            $table->tinyInteger('course_id')->nullable()->unsigned();
            $table->string('date_enroll')->nullable();
            $table->string('status')->nullable();
            $table->string('date_completed')->nullable();
            $table->string('ecertificate_link')->nullable();
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
        Schema::dropIfExists('course_users');
    }
}
