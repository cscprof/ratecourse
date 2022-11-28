<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $table = 'faculty';

   public function courses(){
       return $this->belongsToMany(Course::class, CourseFaculty::class);
   }


   public function reviews(){
       return $this->hasMany(Review::class)->select(['id', 'faculty_id', 'course_id', 'term_id', 'user_id']);;
   }



}
