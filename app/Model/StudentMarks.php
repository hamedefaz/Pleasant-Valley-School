<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\Subject;
use App\Model\ExamType;
use App\Model\StudentClass;
use App\Model\Session;

class StudentMarks extends Model
{
    public function user(){
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function subject(){
        return $this->belongsTo(Subject::class, 'assign_subject_id', 'id');
    }

    public function examtype(){
        return $this->belongsTo(ExamType::class, 'exam_type_id', 'id');
    }

    public function sclass(){
        return $this->belongsTo(StudentClass::class, 'class_id', 'id');
    }

    public function year(){
        return $this->belongsTo(Session::class, 'year_id', 'id');
    }
}
