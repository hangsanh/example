<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignParticipant extends Model
{
    protected $table = 'campaigns_participants';

   protected $primaryKey = 'campaigns_participants_id';

   public function campaign()
   {
   		return $this->belongsTo('App\Campaign');
   }
   public function participant()
   {
   		return $this->belongsTo('App\Participant');
   }

   public function join(){
      $select =  CampaignParticipant::select('questions_id','trigger_id','label','asked_once','type','message','is_skippable','allow_multiple','allow_other','other_label','comparator','max_answer_length','rvalue','campaigns_participants_id')

        ->join('campaigns ', 'campaigns_participants.campaigns_id', '=', 'campaigns.campaigns_id')

        ->join('surveys ', 'campaigns.surveys_id', '=', 'surveys.surveys_id')

        ->join('questions ', 'surveys.surveys_id', '=', 'questions.surveys_id')

        ->where('campaigns_participants_id', '=', 'abc')

        ->get();
   }
   
}
