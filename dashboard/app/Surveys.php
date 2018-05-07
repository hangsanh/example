<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surveys extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'surveys';

    protected $primaryKey = 'surveys_id';

    protected $fillable = ['title', 'version', 'token', 'hidden_open', 'surveys_id'];
       
    public function usequestion()
    {
    	//return $this->hasMany('App\Questions')->select(array('questions_id', 'surveys_id'));
        return $this->hasMany('App\Questions','surveys_id');
    }

    public function usecampaign(){
       return $this->hasMany('App\Campaign','campaigns_id'); 
    }
}
