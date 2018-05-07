<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('answers', function (Blueprint $table) {
            $table->increments('answers_id');
            $table->integer('questions_id')->unsigned();
            $table->mediumtext('answer');
            $table->string('gif');
            $table->string('gif_searched_term');
            $table->string('author_token');
            $table->timestamps();
        });
        Schema::table('answers', function($table){
            $table->foreign('questions_id')->references('questions_id')->on('questions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
