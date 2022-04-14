<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Http\Controllers\api\StudentsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('students', function () {
    return Student::all();
});

Route::get('students/{student}', function (Student $student) {
    return $student;
});
