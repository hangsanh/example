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
        Schema::enableForeignKeyConstraints();

        Schema::create('questions', function (Blueprint $table) {
           $table->increments('questions_id');
            $table->integer('surveys_id')->unsigned();
            $table->string('trigger_id')->nullable();;
            $table->string('label');
            $table->boolean('asked_once')->default(1);
            $table->string('type');
            $table->text('message');
            $table->boolean('is_skippable')->default(1);
            $table->boolean('allow_multiple')->default(1);
            $table->boolean('allow_other')->default(0);
            $table->string('other_label')->nullable();
            $table->string('comparator')->nullable();
            $table->integer('max_answer_length')->nullable();
            $table->integer('rvalue')->nullable();
            $table->timestamps();
        });

        Schema::table('questions', function($table){
            $table->foreign('surveys_id')->references('surveys_id')->on('surveys')->onDelete('cascade')->onUpdate('cascade');
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
