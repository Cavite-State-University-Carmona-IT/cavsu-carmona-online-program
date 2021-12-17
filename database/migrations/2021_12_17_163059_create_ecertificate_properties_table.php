<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcertificatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecertificate_properties', function (Blueprint $table) {
            $table->id();
            $table->string('background_template')->nullable();
            $table->text('name')->nullable()->comment('name css properties');
            $table->text('date')->nullable()->comment('date css properties');
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
        Schema::dropIfExists('ecertificate_properties');
    }
}
