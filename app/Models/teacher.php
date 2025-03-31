<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    //
    public function training_center (){
        return $this->belongsTo("App/Models/training_center");
    }
    //
    public function areas(){
        return $this->belongsTo("App/Models/areas");
    }
    //
    public function roles(){
        return $this->belongsToMany("App/Models/course");
    }
}
