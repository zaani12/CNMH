<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

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
Route::get('/',[TaskController::class,'index'])->name('home');
Route::get('add.task',[TaskController::class,'create'])->name('add.task');
Route::get('add.task',[TaskController::class,'store'])->name('add.task');
Route::get('edit/{id}',[TaskController::class,'store'])->name('edit.task');
Route::get('delete/{id}',[TaskController::class,'destroy'])->name('delete.task');
Route::get('edit/{id}',[TaskController::class,'update'])->name('update.task');
Route::post('search.task' ,[TaskController::class, 'search'])->name('search.task');

