<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseFaculty extends Model
{
    use HasFactory;

    protected $table = 'course_faculties';

    public function term(){
        return $this->belongsTo(Term::class);
    }

}
