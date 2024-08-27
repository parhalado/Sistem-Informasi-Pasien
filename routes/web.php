<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PatientController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pasien',[PatientController::class,'index']);
Route::get('/pasien/create',[PatientController::class,'create']);
Route::post('/pasien', [PatientController::class, 'store']);