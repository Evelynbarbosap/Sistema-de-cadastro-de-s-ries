<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public function assessment() {
        return $this->belongsTo('App\Assessments');
    }

}
