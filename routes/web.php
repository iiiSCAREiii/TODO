<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\BoardUserController;
use App\Http\Controllers\TaskController;
use App\Models\Board;
use App\Models\Task;

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
    return view('welcome' );
})->name('welcome' );

Route::middleware( ['auth:sanctum', 'verified'] )->get('/dashboard', function () {
    return view('dashboard' );
})->name('dashboard' );


 Route::get('/boards', [BoardController::class, 'index'] )->middleware('auth' )->name('boards.index' );
 Route::get('/boards/create', [BoardController::class, 'create'])->middleware('auth' )->name('boards.create' );
 Route::get('/boards/{board}', [BoardController::class, 'show'])->middleware('auth' )->name('boards.show' );
 Route::post('/boards', [BoardController::class, 'store'])->middleware('auth' )->name('boards.store' );
 Route::get('/boards/{board}/edit', [BoardController::class, 'edit'])->middleware('auth' )->name('boards.edit' );
 Route::put('/boards/{board}', [BoardController::class, 'update'])->middleware('auth' )->name('boards.update' );
 Route::delete('/boards/{board}', [BoardController::class, 'destroy'])->middleware('auth' )->name('boards.destroy' );

Route::resource('boards', BoardController::class )->middleware('auth' );

Route::get('boards/{board}/tasks', [TaskController::class, 'index'] )->middleware('auth' )->name('tasks.index' );
Route::get('boards/{board}/tasks/create', [TaskController::class, 'create'] )->middleware('auth' )->name('boards.tasks.create' );
Route::post('boards/{board}/tasks', [TaskController::class, 'store'] )->middleware('auth' )->name('tasks.store' );
Route::get('boards/{board}/tasks/show/{task}', [TaskController::class, 'show'] )->middleware('auth' )->name('tasks.show' );
Route::get('boards/{board}/tasks/edit/{task}', [TaskController::class, 'edit'] )->middleware('auth' )->name('tasks.edit' );
Route::get('boards/{board}/tasks/update/{task}', [TaskController::class, 'update'] )->middleware('auth' )->name('tasks.update' );

Route::post('boards/{board}/boarduser', [BoardUserController::class ,  'store'] )->middleware('auth' )->name('boards.boarduser.store' );
Route::delete('boarduser/{boardUser}', [BoardUserController::class ,  'destroy'] )->middleware('auth' )->name('boards.boarduser.destroy' );;
