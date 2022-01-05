<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebinarUserReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinar_user_reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('webinar_id')->unsigned();
            $table->foreign('webinar_id')->unsigned()->references('id')->on('webinars');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->unsigned()->references('id')->on('users');
            $table->tinyInteger('rate')->comment('1-lowest 5-highest')->unsigned()->nullable();
            $table->string('comment_title')->nullable();
            $table->text('comment_body')->nullable();
            $table->integer('likes')->unsigned()->nullable();
            $table->integer('unlikes')->unsigned()->nullable();
            $table->integer('shares')->unsigned()->nullable();
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
        Schema::dropIfExists('webinar_user_reviews');
    }
}
