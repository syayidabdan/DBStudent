<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('login',
    ["judulbesar"=>"Hi There, Don't forget to log in your account!",
    "subjudul"=>"You must log in your account before filling in data!"]
);
});

Route::get('/home',[StudentController::class,'index']);

Route::get('/about',[StudentController::class,'create']);

Route::post('/store',[StudentController::class,'store']);

Route::get('/{id}/edit',[StudentController::class,'edit']);

Route::put('update/{id}',[StudentController::class,'update']);

Route::delete('update/{id}',[StudentController::class,'destroy']);