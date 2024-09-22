<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\LoginController; 
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConfirmController;


Route::get('/', [IndexController::class, 'showForm'])->name('index');
Route::post('/', [IndexController::class, 'handleForm'])->name('index.submit');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit'); 

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');  

Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'handleContactForm'])->name('contact.submit');

Route::get('/confirm', [ConfirmController::class, 'confirm'])->name('contact.confirm');
Route::post('/confirm', [ConfirmController::class, 'submit'])->name('contact.submit.confirm');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');
