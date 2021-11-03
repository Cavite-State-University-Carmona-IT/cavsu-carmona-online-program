<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headlines', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('image')->nullable();
            $table->text('link')->nullable();
            $table->boolean('visible')->default(false);
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
        Schema::dropIfExists('headlines');
    }
}
