<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\attendanceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SetSectionController;


// registration
Route::get('/user/regisration',[UserController::class,'registration'])->name('user.registration');
Route::post('/user/regisration/store',[UserController::class,'registrationStore'])->name('user.registration.store');

// form/login
Route::get("/", [AdminController::class, 'login_view'])->name('admin.login');
Route::post("/login", [AdminController::class, 'login'])->name('login.view');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', function () {
        return view('Backend.master');
    })->name('home');
Route::get('/',[MasterController::class,'index'])->name('master.index');

// Logout
Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');


// =======================class======================= //
Route::get('/class/list',[DepartmentController::class, 'index'])->name('department.index');
Route::get('/class/create',[DepartmentController::class, 'create'])->name('department.create');
Route::post('/class/store',[DepartmentController::class, 'store'])->name('department.store');
Route::get('/class/edit',[DepartmentController::class, 'edit'])->name('department.edit');
Route::get('/class/delete/{id}',[DepartmentController::class, 'destroy'])->name('department.delete');
// ===================set section======================
Route::get('/student/class',[SetSectionController::class, 'studentClass'])->name('student.class');
Route::post('/student/class/store',[SetSectionController::class, 'studentClassStore'])->name('student.class.store');
Route::get('/student/class/show',[SetSectionController::class, 'sectionShort'])->name('student.class.show');
Route::get('/student/class/delete/{id}',[SetSectionController::class, 'deleteStudent'])->name('student.class.delete');

// ===================== student attendance ===================
Route::get('/student/attendance',[attendanceController::class, 'attendance'])->name('student.attendance');
Route::post('/student/attendance/store',[attendanceController::class, 'attendanceStore'])->name('student.attendance.store');
Route::get('/student/attendance/show',[attendanceController::class, 'attendanceShow'])->name('student.attendance.show');

// ===================== Exam =================== //
Route::get('/exam/list',[ExamController::class, 'index'])->name('exam_index');
Route::get('/exam/create',[ExamController::class, 'create'])->name('exam_create');
Route::post('/exam/store',[ExamController::class, 'store'])->name('exam_store');
Route::get('/exam/edit',[ExamController::class, 'edit'])->name('exam_edit');
Route::get('/exam/delete/{id}',[ExamController::class, 'destroy'])->name('exam_delete');



// =======================student======================= //
Route::get('/student/list',[StudentController::class, 'index'])->name('student.index');
Route::get('/student/create',[StudentController::class, 'create'])->name('student.create');
Route::post('/student/store',[StudentController::class, 'store'])->name('student.store');
Route::get('/student/show/{id}',[StudentController::class, 'show'])->name('student.show');
Route::get('/student/edit/{id}',[StudentController::class, 'edit'])->name('student.edit');
Route::post('/student/update{id}',[StudentController::class, 'update'])->name('student.update');
Route::get('/student/delete/{id}',[StudentController::class, 'delete'])->name('student.delete');
Route::get('/student/approved/{id}',[StudentController::class, 'approved'])->name('student.approved');
// =======================subject======================= //store
Route::get('/subject/list',[SubjectController::class, 'index'])->name('subject.index');
Route::get('/subject/create',[SubjectController::class, 'create'])->name('subject.create');
Route::post('/subject/store',[SubjectController::class, 'store'])->name('subject.store');
Route::get('/subject/edit',[SubjectController::class, 'edit'])->name('subject.edit');

// =======================teacher======================= //
Route::get('/teacher/list',[TeacherController::class, 'index'])->name('teacher.index');
Route::get('/teacher/create',[TeacherController::class, 'create'])->name('teacher.create');
Route::post('/teacher/store',[TeacherController::class, 'store'])->name('teacher.store');
Route::get('/teacher/show/{id}',[TeacherController::class, 'show'])->name('teacher.show');
Route::get('/teacher/edit/{id}',[TeacherController::class, 'edit'])->name('teacher.edit');
Route::post('/teacher/update/{id}',[TeacherController::class, 'update'])->name('teacher.update');
Route::get('/teacher/delete/{id}',[TeacherController::class, 'destroy'])->name('teacher.delete');

});
