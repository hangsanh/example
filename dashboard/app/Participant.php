<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{


	protected $table = 'participants';

   	protected $primaryKey = 'participants_id';

    public function getparticipant()
    {
    	return $this->hasMany('App\CampaignParticipant','participants_id');
    }
}

