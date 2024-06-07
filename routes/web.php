<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//home 
Route::get('/', [HomeController::class,"index"])->name('home');

//todo
Route::prefix('/todo')->group(function (){ 
    Route::get('/', [TodoController::class,"index"])->name('todo');
    Route::post('/store', [TodoController::class,"store"])->name('todo.store'); //to post the database //'store' - function ekk
    Route::get('/delete/{task_id}', [TodoController::class,"delete"])->name('todo.delete');
    Route::get('/done/{task_id}', [TodoController::class,"done"]) -> name('todo.done');
    Route::get('/udone/{task_id}', [TodoController::class,"udone"]) -> name('todo.udone');
});

