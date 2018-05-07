<?php

use Illuminate\Database\Seeder;
use App\Surveys;

class SurveysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    	Surveys::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Surveys::create([
        	'title' =>'Survey app',
       		'version' =>'1',
       		'hidden_open' =>'0'
        ]);
    }
}
