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
    $student = new student();
    $student->first_name = 'jhon';
    $student->last_name = 'Done';
    $student->email = 'jhondoe@example.com';
    $student->age = 22;
    $student->save();
    return 'student Created!';
});

Route::get('/student', function(){
 $student = student::all();
 return $students;

});


Route::get('/student', function(){
    $student = student::where('email', 'jhondoe@example.com')->first();
    $student->email = 'jhondoe@example.com';
    $student->age = 23;
    $student->save();
    return $students;
   
   });

   Route::get('/student/update', function() {
    $student = student::all();
    return $students;
   
   });