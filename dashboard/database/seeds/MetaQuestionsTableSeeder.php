<?php

use Illuminate\Database\Seeder;
use App\MetaQuestions;

class MetaQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    	MetaQuestions::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $choice_ans=[
	        [
	        	'questions_id' => 5,
	       		'key' =>'A',
	       		'value' =>'Agile Software Development'
	       		
	        ],
	        [
	        	'questions_id' => 5,
	       		'key' =>'B',
	       		'value' =>'Cyber Security'
	       		
	        ],
	        [
	        	'questions_id' => 5,
	       		'key' =>'C',
	       		'value' =>'Personal Growth'
	       		
	        ],
	        [
	        	'questions_id' => 7,
	       		'key' =>'A',
	       		'value' =>'Not at all'
	       		
	        ],
	        [
	        	'questions_id' => 7,
	       		'key' =>'B',
	       		'value' =>'Not really'
	       		
	        ],
	        [
	        	'questions_id' => 7,
	       		'key' =>'C',
	       		'value' =>'Ok'
	       		
	        ],
	        [
	        	'questions_id' => 7,
	       		'key' =>'D',
	       		'value' =>'Good'
	       		
	        ],
	        [
	        	'questions_id' => 7,
	       		'key' =>'F',
	       		'value' =>'Very well'
	       		
	        ],
	        [
	        	'questions_id' => 8,
	       		'key' =>'A',
	       		'value' =>'Yes'
	       		
	        ],
	        [
	        	'questions_id' => 8,
	       		'key' =>'B',
	       		'value' =>'No, I will review the course myself'
	       		
	        ],
	     ];

	        foreach ($choice_ans as $choice_an) {
        	MetaQuestions::create($choice_an);
        }
    
    }
}
