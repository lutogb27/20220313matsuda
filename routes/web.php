<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TodoController;


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

Route::get('/', [TodoController::class, 'index']);
Route::get('/todo/create', [AuthorController::class, 'add']);
Route::post('/todo/create',  [TodoController::class, 'create'])->name('todo.create');
Route::get('/todo/update', [AuthorController::class, 'edit']);
Route::post('/todo/update/{id}', [TodoController::class, 'update'])->name('todo.update');
Route::post('/todo/delete/{id}', [TodoController::class, 'delete'])->name('todo.delete');
Route::post('/todo/delete', [AuthorController::class, 'remove']);