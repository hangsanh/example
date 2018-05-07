<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use App\Questions;
use App\MetaQuestions;
use App\Surveys;
use App\CampaignParticipant;
use App\Participant;
use App\Campaign;
use Illuminate\Support\Facades\DB;

class QuestionsController extends BaseController
{
    public function index()
    {
    	
    	
        $questions= Questions::with('answer')->get();
        $meta = MetaQuestions::with('question')->get();
        $survey = Surveys::with('usequestion')->get();
        
        $question= DB::table('campaigns_participants as cp')

            ->join('campaigns as cpm', 'cp.campaigns_id', '=', 'cpm.campaigns_id')

            ->join('surveys as sv', 'cpm.surveys_id', '=', 'sv.surveys_id')
            ->join('questions as qus', 'sv.surveys_id', '=', 'qus.surveys_id')
            ->select('qus.questions_id','qus.trigger_id','qus.label','qus.asked_once','qus.type','qus.message','qus.is_skippable','qus.allow_multiple','qus.allow_other','qus.other_label','qus.comparator','qus.max_answer_length','qus.rvalue','cp.campaigns_participants_id','sv.surveys_id')
            ->where('cp.campaigns_participants_id', '=', 'abc')
            ->get();
        
        
            $components = [];
            foreach ($questions as $item) {
                $version = $item->surveys_id;
                $options=array();
                // $trigger =array();
               
                $options["message"]= $item->message;
                $options["is_skippable"] = $item->is_skippable == 1 ? true : false;

                if ($item->type=="choice") {
                        
                    $answers=array();

                    foreach ($item->answer as $answer) {
                       // dd($answer->value);
                        $answers[]=$answer->value;   
                    
                    }
                $options["allow_multiple"] = $item->allow_multiple == 1 ? true : false;
                $options["allow_other"] = $item->allow_other == 1 ? true : false;
                $options["randomize_answers_order"] = $item->randomize_answers_order == 1 ? true : false;
                $options["other_label"] = $item->other_label == null ? "" : $item->other_label; 
                $options["answers"] = $answers;   

                }

                 
                $component = array(
                    "label" => $item->label,
                    "asked_once" => $item->asked_once == 1 ? true : false,
                    "options" => $options,
                    
                    "type" => $item->type
                );

                if ($item->trigger_id != null) {
                
                
                    if ($item->questions_id==3 ) {
                        $trigger["label"]= $item->trigger_id;
                
                    }
                    if ($item->questions_id==4 ) {
                        $trigger["label"]= $item->trigger_id;

                    }
                    if ($item->questions_id==8 ) {
                        $trigger["label"]= $item->trigger_id;
                
                    }
                    $trigger["comparator"]= $item->comparator;
                    $trigger["rvalue"]= $item->rvalue == null ? : "$item->rvalue"; 
                    $component["trigger"]=$trigger;
                    //dd($component);

                  
                }
                 //dd($trigger);
       
               $components[]=$component;
           
            }
   
           

	    return $this->sendResponse($components,$version);
             // dd($questions);
    }
}
