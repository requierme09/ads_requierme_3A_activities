<?php

use App\Models\student;
use App\Models\Course;
use Illuminate\Support\Facades\Ruoter;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students/create', function () {
    $student = new Student();
    $student->first_name = 'john';
    $student->last_name = 'Doe';
    $student->email = 'johndoe@example.com';
    $student->age = 22;
    $student->save();
    return 'Student Created!';
});

Route::get('/student', function () {
 $student = Student::all();
 return $students;

});


Route::get('/students/update', function () {
    $student = Student::where('email', 'johndoe@example.com')->first();
    $student->email = 'john.doe@newmail.com';
    $student->age = 23;  //update age as well
    $student->save();
    return 'Student Update!';
   
 });

   Route::get('/students/delete', function () {
    $student = Student::where('email', 'john.doe@newmail.com')->first();
    $student->delete();
    return 'Student Delete!';
});

Route::get('/course/{id}/students', function ($id) {
    $course = Course::find($id);
    return $course ? $course->students : 'Course not found!';
});

Route::get('/course/create', function () {
    $course = new course(); // Fixed class name case
    $course->course_name = 'Introduction to Databases';
    $course->save();
    return 'Course Created!';
});
