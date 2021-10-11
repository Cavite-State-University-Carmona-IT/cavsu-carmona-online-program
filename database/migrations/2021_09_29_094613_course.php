<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Course extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('objectives')->nullable();
            $table->string('about')->nullable();
            $table->string('presented_by', 100)->nullable();
            $table->string('video_link')->nullable();
            $table->string('evaluation_link')->nullable();
            $table->string('ecertificate_link')->nullable();
            $table->boolean('default_ecert');
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
        Schema::dropIfExists('course');
    }
}
