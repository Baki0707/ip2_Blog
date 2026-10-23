<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller1;
use App\Http\Controllers\Controller2;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;



Route::get('/', [HomeController::class, 'index']);
Route::get('/deneme', [HomeController::class, 'deneme']);


Route::get('/c1/action1', [Controller1::class, 'action1']);
Route::get('/c1/action2', [Controller1::class, 'action2']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/not', [Controller1::class, 'form']);
Route::post('/not', [Controller1::class, 'hesapla']);

Route::get('/c1/action4', [\App\Http\Controllers\QuizController::class, 'QuizController']);
Route::post('/c1/sinav-degerlendir', [\App\Http\Controllers\QuizController::class, 'sinavDegerlendir']);


Route::get('/c2/action1', [Controller2::class, 'action1']);
Route::get('/c2/action2', [Controller2::class, 'action2']);
Route::get('/c2/action3', [Controller2::class, 'action3']);
Route::get('/c2/action4', [Controller2::class, 'action4']);





Route::get('/', [BlogController::class, 'index']);
Route::get('/haber/{id}', [BlogController::class, 'detail']);

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/admin', [BlogController::class, 'admin']);
Route::post('/admin/ekle', [BlogController::class, 'store']);
Route::get('/admin/sil/{id}', [BlogController::class, 'destroy']);
