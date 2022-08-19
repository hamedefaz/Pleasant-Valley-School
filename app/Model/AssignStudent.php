<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class AssignStudent extends Model
{
    public function student(){
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function student_class(){
        return $this->belongsTo(StudentClass::class, 'class_id', 'id');
    }

    public function session(){
        return $this->belongsTo(Session::class, 'year_id', 'id');
    }
}
