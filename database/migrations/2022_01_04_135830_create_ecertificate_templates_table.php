<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcertificateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecertificate_templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('css_title')->nullable();
            $table->string('css_name')->nullable();
            $table->string('css_date')->nullable();
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
        Schema::dropIfExists('ecertificate_templates');
    }
}
