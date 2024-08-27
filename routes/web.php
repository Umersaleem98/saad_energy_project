<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'about_us']);
Route::get('/contact-us', [HomeController::class, 'contact_us']);
Route::post('/contact-submit', [HomeController::class, 'submit']);

Route::get('/suppliers', [HomeController::class, 'oursuppliers']);
Route::get('/partners', [HomeController::class, 'ourpartners']);
Route::get('/energy-solution', [HomeController::class, 'energysolution']);
Route::get('/business-insurance-solution', [HomeController::class, 'businessinsurancesolution']);
Route::get('/business-telecom-and-broadband', [HomeController::class, 'businesstelecomandbroadband']);
Route::get('/business-finance', [HomeController::class, 'businessfinance']);
Route::get('/business-merchants-solution', [HomeController::class, 'businessmerchantssolution']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/message', [DashboardController::class, 'message_list']);
