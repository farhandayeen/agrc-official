<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\masterController;
use App\Http\Controllers\FormulirController;


// Route::get('/', function() {
//     return view('home');
// });
Route::get('/', [masterController::class, 'index'])->name('home');

Route::get('/about', [masterController::class, 'about'])->name('about');
Route::get('/member', [masterController::class, 'member'])->name('member');
Route::get('/contact', [masterController::class, 'contact'])->name('contact');
Route::get('/gallery', [masterController::class, 'gallery'])->name('gallery');

Route::get('/register', [FormulirController::class, 'showForm'])->name('register');
Route::post('/register', [FormulirController::class, 'submitForm'])->name('register.submit');
// Route::get('/register.show', [FormulirController::class, 'showForm'])->name('register.show');