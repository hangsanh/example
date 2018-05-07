<?php

use Illuminate\Database\Seeder;
use App\Questions;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    	Questions::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $datas = [
        	[
	        	//'questions_id' => '1',
	        	
	        	'surveys_id' => 1,
	        	'asked_once' =>false ,
	        	'label'=>'8db88eef-3234-4957-97b8-d38e760dae9d',
	        	'type' => 'text',
	        	'message' => 'Hi! Welcome to the UP survey app',
	        	'is_skippable' => false,
	        	'allow_multiple' => false
	        	

       		 ],

       		 [
       		 	//'questions_id' => '2',
       		 	
	        	'surveys_id' => 1,
	        	'asked_once' => false,
	        	'label'=>'39df9301-6ed3-447e-83e3-89050e1b6a22',
	        	'type' => 'mood',
	        	'message' => 'How are you today ?',
	        	'is_skippable' => false,
	        	'allow_multiple' => false,
	        	'allow_other' => false
       		 ],

       		 [
       		 	//'questions_id' => '3',
       		 	'trigger_id'=>'39df9301-6ed3-447e-83e3-89050e1b6a22',
	        	'surveys_id' => 1,
	        	'label'=>'a1aef4a9-090f-45a4-a7ea-4a4f4a285234',
	        	'asked_once' => false,
	        	'type' => 'open',
	        	'message' => 'Oh! Why ?',
	        	'is_skippable' => false,
	        	'allow_multiple' => false,
	        	'allow_other' => false,
	        	'comparator' =>'LESSEQUAL',
	        	'rvalue' => 1
       		 ],

       		 [
       		 	//'questions_id' => '4',
       		 	'trigger_id'=>'39df9301-6ed3-447e-83e3-89050e1b6a22',
	        	'surveys_id' => 1,
	        	'label'=>'329d6778-3774-4ae5-a076-f31ee89a6355',
	        	'asked_once' => false,
	        	'type' => 'text',
	        	'message' => 'Great!',
	        	'is_skippable' => false,
	        	'allow_multiple' => false,
	        	'allow_other' => false,
	        	'comparator' =>'GREATEREQUAL',
	        	'rvalue' => 2
       		 ],
       		 [
       		 	//'questions_id' => '5',
       		 	
	        	'surveys_id' => 1,
	        	'label'=>'6f8b20dd-8769-438e-af8b-a6db79caede3',
	        	'asked_once' => false,
	        	'type' => 'choice',
	        	'message' => 'What subject(s) did you learn today?',
	        	'is_skippable' => false,
	        	'allow_multiple' => true
	        	
	        	
       		 ],
       		 [
       		 	//'questions_id' => '6',
       		 	
	        	'surveys_id' => 1,
	        	'label'=>'a11ee3e8-456d-4ccc-81b0-d53ce82610a9',
	        	'asked_once' => false,
	        	'type' => 'open',
	        	'message' => 'What are the concepts you have learned today ?',
	        	'is_skippable' => false,
	        	'allow_multiple' => true,
	        	'allow_other' => true
	        	
       		 ],
       		 [
       		 	//'questions_id' => '6',
       		 	
	        	'surveys_id' => 1,
	        	'label'=>'5c42df95-52bc-4afa-aa7d-6787b2c1e462',
	        	'asked_once' => false,
	        	'type' => 'choice',
	        	'message' => 'Do you understand well ?',
	        	'is_skippable' => false,
	        	'allow_multiple' => true
	        	
       		 ],
       		 [
       		 	//'questions_id' => '7',
       		 	'trigger_id'=>'5c42df95-52bc-4afa-aa7d-6787b2c1e462',
	        	'surveys_id' => 1 ,
	        	'label'=>'0ba1f7c4-2671-4c9c-8599-df705b7567ee',
	        	'asked_once' => false,
	        	'type' => 'choice',
	        	'message' => 'Do you need more explanation ?',
	        	'is_skippable' => false,
	        	'allow_multiple' =>true ,
	        	'allow_other' => true,
	        	'comparator' =>'LESSEQUAL',
	        	'rvalue' => 2
       		 ],
       		 [
       		 	//'questions_id' => '8',
       		 	
	        	'surveys_id' => 1,
	        	'label'=>'ff632c8d-2a7c-4583-bc9a-4504ae667b2d',
	        	'asked_once' => false,
	        	'type' => 'open',
	        	'message' => 'Do you have any feedbacks to improve the course and help you to learn more efficiently?',
	        	'is_skippable' => false,
	        	'allow_multiple' =>false
	        	
       		 ],
       		 [
       		 	//'questions_id' => '9',
       		 	
	        	'surveys_id' => 1,
	        	'label'=>'47e50d59-8f86-4462-891d-8d708a69f49f',
	        	'asked_once' => false,
	        	'type' => 'text',
	        	'message' => 'Thank you for your valuable feedbacks! It will help us to bring you a better education experience',
	        	'is_skippable' => false,
	        	'allow_multiple' => false,
	        	'allow_other' => false
	        	
       		 ]
       	];
        foreach ($datas as $data) {
        	Questions::create($data);
        }

    
    }
}
