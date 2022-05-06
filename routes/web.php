<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class, 'login']);
Route::get('/tasks', [HomeController::class, 'userDashboard'] );
Route::get('/admin', [HomeController::class, 'adminDashboard'] );

Route::post('update-task', [HomeController::class, 'updateTask'] );
Route::post('delete-task', [HomeController::class, 'deleteTask'] );


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
