<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = 'campaigns';

   	protected $primaryKey = 'campaigns_id';

   	public function getcampaign()
    {
    	return $this->hasMany('App\CampaignParticipant', 'campaigns_id');
    }
    public function getsurveys()
    {
    	return $this->belongsTo('App\Surveys', 'surveys_id');
    }
}
