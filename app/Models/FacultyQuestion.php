<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyQuestion extends Model
{
    use HasFactory;

    protected $table = 'faculty_questions';

//    public function faculty(){
//        return $this->belongsToMany(Faculty::class, CourseFaculty::class);
//    }

}
