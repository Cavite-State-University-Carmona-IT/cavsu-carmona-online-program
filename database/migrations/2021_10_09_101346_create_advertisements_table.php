<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->date('date')->nullable();
            $table->tinyInteger('extension_service_id')->unsigned()->nullable();
            $table->string('presented_by')->nullable();
            $table->string('about')->nullable();
            $table->string('image')->nullable();
            $table->text('link')->nullable();
            $table->tinyInteger('status')->unsigned()->nullable();
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
        Schema::dropIfExists('advertisements');
    }
}
