<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('questions_id');
            $table->integer('surveys_id');
            $table->integer('trigger');
            $table->string('label');
            $table->boolean('asked_once');
            $table->string('type');
            $table->text('message');
            $table->boolean('is_skippable');
            $table->boolean('allow_multiple');
            $table->boolean('allow_other');
            $table->string('other_label');
            $table->string('comparator');
            $table->integer('max_answer_length');
            $table->integer('rvalue');
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
        Schema::dropIfExists('questions');
    }
}
