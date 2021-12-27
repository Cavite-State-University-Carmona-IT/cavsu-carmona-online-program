<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebinarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinars', function (Blueprint $table) {
            $table->id();
            $table->double('price')->unsigned()->nullable();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->text('about')->nullable();
            $table->tinyInteger('extension_service_id')->unsigned()->nullable();
            $table->string('speaker')->nullable();
            $table->text('video_link')->nullable();
            $table->smallInteger('duration')->nullable();
            $table->date('date')->nullable();
            $table->text('evaluation_link')->nullable();
            $table->text('ecertificate_link')->nullable();
            $table->boolean('is_ecert_default')->unsigned()->nullable();
            $table->tinyInteger('status')->unsigned()->nullable();
            $table->integer('ecertificate_property_id')->unsigned()->nullable();
            $table->integer('created_by')->unsigned()->nullable();
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
        Schema::dropIfExists('webinars');
    }
}
