<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function user_courses(){
        return $this->hasMany(Usercourses::class, 'course_id');
    }
}
