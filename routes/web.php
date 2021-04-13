<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('students', [StudentController::class, 'allStudent'])->name('students.allstudent');
Route::get('add', [StudentController::class, 'add'])->name('add.add');
Route::post('add', [StudentController::class, 'addToDB'])->name('add.addToDB');
Route::get('student/{erp}', [StudentController::class, 'student']);
Route::get('student/edit/{erp}', [StudentController::class, 'edit'])->name('edit.edit');
Route::post('student/edit', [StudentController::class, 'editToDB'])->name('edit.editToDB');
Route::get('delete/{erp}', [StudentController::class, 'delete'])->name('delete.delete');


