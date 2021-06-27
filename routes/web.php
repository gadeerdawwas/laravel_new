<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/home',[PageController::class ,'home'])->name('home');
Route::get('/about',[PageController::class ,'about'])->name('about');
Route::get('/contact',[PageController::class ,'contact'])->name('contact');
Route::get('/services',[PageController::class ,'services'])->name('services');
Route::get('/team',[PageController::class ,'team'])->name('team');


Route::get('/check/{name}',[PageController::class ,'checkName'])->middleware('check');





Route::get('/', function () {
    return view('welcome');
});

