<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/index', function () {
//     return "hello";
// });


// Route::get('/about', function () {
//     return "hello about";
// });
Route::get('/',[TestController::class, 'index']);

Route::get('/index',[TestController::class, 'index']);
Route::get('/about',[TestController::class, 'about']);



# 2 part
Route::get('/students',[StudentController::class, 'index']);
Route::get('/students/create',[StudentController::class, 'create']);
Route::post('/students',[StudentController::class, 'store']);


# 3 part
Route::get('/students/show/{student}', [StudentController::class, 'show']);
Route::get('/students/edit/{student}', [StudentController::class, 'edit']);
Route::post('/students/update/{student}', [StudentController::class, 'update']);
Route::post('/students/destroy/{student}', [StudentController::class, 'destroy']);
