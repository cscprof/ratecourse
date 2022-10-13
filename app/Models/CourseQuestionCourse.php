<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseQuestionCourse extends Model
{
    use HasFactory;

    protected $table = 'course_questions_courses';

//    public function faculty(){
//        return $this->belongsToMany(Faculty::class, CourseFaculty::class);
//    }
}
