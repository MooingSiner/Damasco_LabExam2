<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('student');
});

Route::get('/student', [StudentController::class, 'student'])->name ('student');
Route::get('/view', [StudentController::class, 'view'])->name ('view');
Route::get('/create', [StudentController::class, 'createview'])->name ('create');
Route::get('/edit/{id}', [StudentController::class, 'editview'])->name ('edit');
Route::post('/create', [StudentController::class, 'create']);
Route::put('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::delete('/delete/{id}', [StudentController::class, 'delete'])->name('delete');
Route::get('/index', [StudentController::class, 'index']);
Route::post('/store', [StudentController::class, 'store']);


