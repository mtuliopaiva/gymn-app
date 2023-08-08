<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\StudentController;



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

// Route::get('/home', function () {
//     return view('login');
// });

Route::get('/footer', function () {
    return view('/layouts/footer');
});



// Route::get('/login', [LoginController::class, 'login']);
// Route::get('/register', [LoginController::class, 'register']);
// Route::get('/admin/dashboard', [StudentController::class, 'index']);

Route::get('/users', [UserController::class, 'getUsers']);
Route::post('/users', [UserController::class, 'store']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::prefix('equipments')->group(function () {
    Route::get('/report', [AdminController::class, 'equipmentsReport'])->name('admin.equipments.report');
    Route::get('/register', [AdminController::class, 'equipmentsRegister'])->name('admin.equipments.register');
    Route::post('/register', [AdminController::class, 'postEquipments']);
});

Route::prefix('instructors')->group(function () {
    Route::get('/report', [InstructorController::class, 'instructorsReport'])->name('admin.instructors.report');
    Route::get('/register', [InstructorController::class, 'instructorsRegister'])->name('admin.instructors.register');
    Route::post('/register', [InstructorController::class, 'postInstructors']);
});

Route::prefix('students')->group(function () {
    Route::get('/report', [StudentController::class,'studentsReport'])->name('admin.students.report');
});

});



