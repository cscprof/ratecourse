<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    public function faculty(){
        return $this->belongsToMany(Faculty::class, CourseFaculty::class);
    }
}
