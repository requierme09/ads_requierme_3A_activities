<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Course extends Model
{
    public function Course()
    {
        return $this->belongsTo(Course::class);
    }
    use HasFactory;
}

// Route::get('/course/create', function () {
//     $course = new Course();
//     $course->course_name = 'Introduction to Databases';
//     $course->save();
//     return 'Course Created!';
// });
