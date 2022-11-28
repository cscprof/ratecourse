<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['faculty_id', 'course_id', 'term_id', 'user_id'];


    public function responses(){
        // return $this->hasMany(QuestionReview::class, 'review_id');
        return $this->hasMany(QuestionReview::class)->select(['review_id', 'question_id', 'response']);
    }

    public function faculty(){
        return $this->belongsTo(Faculty::class)->select(['id', 'lastname', 'firstname', 'middlename']);
    }

    public function course(){
        return $this->belongsTo(Course::class)->select(['id', 'department', 'number', 'section', 'title', 'credits']);
    }

    public function user(){
        return $this->belongsTo(User::class)->select(['id', 'name', 'email']);
    }

}
