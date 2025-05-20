<?php

use App\Http\Controllers\CollectionContoller;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\InstaUserController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/country',[CountryController::class,'index']);

Route::get('/volunteer',[VolunteerController::class,'index']);

Route::get('/collector',[CollectionContoller::class,'index']);

Route::get('/insta',[InstaUserController::class,'index']);