<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetaQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        
        Schema::create('meta_questions', function (Blueprint $table) {
            $table->increments('meta_questions_id');
            $table->integer('questions_id')->unsigned();
            $table->string('key');
            $table->mediumtext('value');
            $table->timestamps();
        });
        Schema::table('meta_questions', function($table){
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
        Schema::dropIfExists('meta_questions');
    }
}
