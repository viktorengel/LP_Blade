<?php

use Illuminate\Support\Facades\Route;

Route::view('/','index')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');
Route::view('/services','services')->name('services');
