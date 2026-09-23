<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->name('home');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/skills', function () { return view('skills'); })->name('skills');
Route::get('/projects', function () { return view('projects'); })->name('projects');
Route::get('/experience', function () { return view('experience'); })->name('experience');
Route::get('/contact', function () { return view('contact'); })->name('contact');