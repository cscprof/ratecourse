<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;

    protected $table = 'terms';

    public function course(){
        return $this->hasMany(CourseFaculty::class, 'term_id');
    }
}
