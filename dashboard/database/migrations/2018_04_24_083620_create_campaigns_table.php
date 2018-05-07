<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('campaigns_id');
            $table->integer('surveys_id')->unsigned();
            $table->string('title');
            $table->date('end_date');
            $table->date('start_date');
            $table->timestamps();
        });

        Schema::table('campaigns', function($table){
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
        Schema::dropIfExists('campaigns');
    }
}
