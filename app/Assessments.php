<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessments extends Model
{
    public function serie(){
        return $this->hasOne('App\Serie', 'assessment_id');
    }
}
