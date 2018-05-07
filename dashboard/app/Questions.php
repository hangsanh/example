<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'questions';

    protected $primaryKey = 'questions_id';

    public function answer()
    {
    	return $this->hasMany('App\MetaQuestions', 'questions_id')->select(array('meta_questions_id', 'questions_id', 'value'));
    }

    public function survey()
   {
   		return $this->belongsTo('App\Surveys');
   }

    
}
