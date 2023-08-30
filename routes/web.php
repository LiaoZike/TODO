<?php

use App\Http\Controllers\AdminHomeController;;

use App\Http\Controllers\AdminSearchTasksController;
use App\Http\Controllers\AdminTasksController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index'])->name('home.index');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name("home.index");
    Route::get('tasks', [AdminTasksController::class, 'index'])->name("tasks.index");
    Route::get('tasks/create', [AdminTasksController::class, 'create'])->name("tasks.create");
    Route::post('tasks', [AdminTasksController::class, 'store'])->name("tasks.store");
    Route::get('tasks/{post}/edit', [AdminTasksController::class, 'edit'])->name("tasks.edit");
    Route::patch('tasks/{post}', [AdminTasksController::class, 'update'])->name("tasks.update");
    Route::delete('tasks/{post}', [AdminTasksController::class, 'destroy'])->name("tasks.destroy");
//    Route::get('/search/name/{name?}', [AdminSearchTasksController::class, 'searchName'])->name("tasks.search.name.index");
    Route::get('tasks/search', [AdminSearchTasksController::class, 'index'])->name("tasks.search.index");
    Route::post('tasks/search', [AdminSearchTasksController::class, 'search'])->name("tasks.search.show");
});
