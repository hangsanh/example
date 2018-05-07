<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaQuestions extends Model
{
   protected $table = 'meta_questions';

   protected $fillable = ['questions_id', 'key', 'value'];

   protected $primaryKey = 'meta_questions_id';

   public function question()
   {
   		return $this->belongsTo('App\Questions');
   }
}
