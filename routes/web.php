<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/country',[CountryController::class,'index']);

Route::get('/volunteer',[VolunteerController::class,'index']);