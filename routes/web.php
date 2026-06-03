<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\DateNaissanceMidle;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/add_students', function () {
    return view('register');
})->name('add-students');

Route::get('/add_course/{id}',[CourseController::class,'create'])->name('add-course');

Route::post('/login',[AdminController::class,'Login'])->name('login-post');

Route::get('/students',[StudentController::class,'getallStudents'])->name('student.get');


Route::post('/add_students',[StudentController::class,'add_student'])->name('rgistre.post')->middleware(DateNaissanceMidle::class);
Route::post('/add_coures/{id}',[CourseController::class,'Add_course'])->name('course.add');

Route::get('/edit_student/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::put('/update_student/{id}',[StudentController::class,'updateStudent'])->name('student.update');

Route::delete('/delete_student/{id}',[StudentController::class,'deleteStudent'])->name('student.delete');
Route::delete('/delete_course/{id}',[CourseController::class,'deletCoures'])->name('course.delete');


Route::get('/profile/{id}',[StudentController::class,'getStudentById'])->name('students.profile');

