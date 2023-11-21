<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ProjectController;
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


Route::get('/', [TasksController::class, 'index'])->name('home');
Route::get('add.task', [TasksController::class, 'create'])->name('add.task');
Route::post('add.task', [TasksController::class, 'store'])->name('add.task');

