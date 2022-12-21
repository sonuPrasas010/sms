<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get("/login",[AuthController::class,"showForm"]);
Route::post("/login",[AuthController::class,"login"]);

Route::get('/add-user', [HomeController::class, "index"]);
Route::post('/add-user', [HomeController::class, "saveStudent"]);
Route::get('/view-user', [HomeController::class, "viewUsers"]);
Route::get("/update-user/{id}",[HomeController::class,"edit"]);
Route::post("/update-user/{id}",[HomeController::class,"update"]);



Route::get('/category', [categoryController::class,'index'] );
Route::post('/category', [categoryController::class,'store'] );
Route::get('/category/{id}', [categoryController::class,'show'] );
Route::post('/category/{id}', [categoryController::class,'update'] );
Route::delete('/delete-category/{id}', [categoryController::class,'destroy'] );
// Route::get('/add-category', [categoryController::class,'store'] );

// Route::get("/");
