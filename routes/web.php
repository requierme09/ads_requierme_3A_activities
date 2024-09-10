<?php

use app\models\student;
use Illuminate\Support\Facades\ruoter;




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


Route::get('/students/create', function () {
    $student = new Student();
    $student->first_name = 'john';
    $student->last_name = 'Doe';
    $student->email = 'johndoe@example.com';
    $student->age = 22;
    $student->save();
    return 'Student Created!';
});

Route::get('/student', function(){
 $student = Student::all();
 return $students;

});


Route::get('/student/update', function () {
    $student = Student::where('email', 'johndoe@example.com')->first();
    $student->email = 'john.doe@newmail.com';
    $student->age = 23;  //update age as well
    $student->save();
    return 'Student Update!';
   
 });

   Route::get('/student/delete', function () {
    $student = student::where('email', 'jhondoe@newemail.com')->first();
    $student->delete();
    return 'Student Delete!';
});

Route::get('/course/{id}/students', function ($id) {
    $course = Course::find($id);
    return $course->students;
});

Route::get('/course/create', function () {
    $course = new Course();
    $course->course_name = 'Introduction to Databases';
    $course->save();
    return 'Course Created!';
});


   Route::get('/', function () {
    return view('welcome');
});


