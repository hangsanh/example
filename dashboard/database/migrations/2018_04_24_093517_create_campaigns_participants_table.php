<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('campaigns_participants', function (Blueprint $table) {
            $table->string('campaigns_participants_id');
            $table->integer('campaigns_id')
                ->unsigned();

            $table->integer('participants_id')
                ->unsigned();

            $table->timestamps();
        });


        Schema::table('campaigns_participants', function($table){
            $table->foreign('campaigns_id')->references('campaigns_id')->on('campaigns')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('participants_id')->references('participants_id')->on('participants')->onDelete('cascade')->onUpdate('cascade');
        });


       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns_participants');
    }
}
