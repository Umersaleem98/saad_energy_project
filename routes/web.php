<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'about_us']);
Route::get('/contact-us', [HomeController::class, 'contact_us']);
Route::post('/contact-submit', [HomeController::class, 'submit']);
Route::get('/our-submit', [HomeController::class, 'ourservices']);

Route::get('/suppliers', [HomeController::class, 'oursuppliers']);
Route::get('/partners', [HomeController::class, 'ourpartners']);
Route::get('/energy-solution', [HomeController::class, 'energysolution']);
Route::get('/business-insurance-solution', [HomeController::class, 'businessinsurancesolution']);
Route::get('/business-telecom-and-broadband', [HomeController::class, 'businesstelecomandbroadband']);
Route::get('/business-finance', [HomeController::class, 'businessfinance']);
Route::get('/business-merchants-solution', [HomeController::class, 'businessmerchantssolution']);

Route::get('/register', [AuthController::class, 'registers']);
Route::post('/register_user', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'logins']);
Route::post('login_user', [AuthController::class, 'login']);

// Logout Route
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('dashboard', function () {
    // Add your dashboard logic here
    return view('dashboard');
})->middleware('auth');


Route::get('/message', [DashboardController::class, 'message_list']);
