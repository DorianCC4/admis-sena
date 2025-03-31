<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{

    //
    public function courses(){
        return $this->hasMany("App/Models/course");
    }
    //
    public function teacher(){
        return $this->hasMany("App/Models/teacher");
    }
}
