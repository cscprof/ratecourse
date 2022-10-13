<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyQuestionFaculty extends Model
{
    use HasFactory;

    protected $table = 'faculty_questions_faculties';

//    public function faculty(){
//        return $this->belongsToMany(Faculty::class, CourseFaculty::class);
//    }
}
