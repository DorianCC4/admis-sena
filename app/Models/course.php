<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
    public function apprentice (){
        return $this->hasMany("App/Model/apprentice");
    }
    //
    public function training_center (){
        return $this->belongsTo("App/Model/training_center");
    }
    //
    public function areas(){
        return $this-> belongsTo("App/Models/area");
    }
    //
    public function teachers(){
        return $this->belongsToMany("App/Models/teacher");
    }
}

