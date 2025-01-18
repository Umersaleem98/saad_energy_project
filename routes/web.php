<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardTeamController;
use App\Http\Controllers\ServiceDashboardController;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear-all', function () {
    // Clear application cache
    Artisan::call('cache:clear');
    // Clear route cache
    Artisan::call('route:clear');
    // Clear config cache
    Artisan::call('config:clear');
    // Clear view cache
    Artisan::call('view:clear');
    // Optional: Clear compiled files
    Artisan::call('clear-compiled');
    // Optional: Reset the application and reload autoload
    Artisan::call('optimize:clear');

    return response()->json([
        'message' => 'All caches cleared successfully!',
    ]);
});


Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'about_us']);
Route::get('/contact-us', [HomeController::class, 'contact_us']);
Route::post('/contact-submit', [HomeController::class, 'submit']);
Route::get('/our-services', [HomeController::class, 'ourservices']);

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

Route::get('/services_create', [ServiceDashboardController::class, 'create']);
Route::post('/services_store', [ServiceDashboardController::class, 'store']);
Route::get('/services_view', [ServiceDashboardController::class, 'services_list']);
Route::get('/services_edit/{id}', [ServiceDashboardController::class, 'edit']);
Route::post('/services_update/{id}', [ServiceDashboardController::class, 'update']);
Route::get('/services_destroy/{id}', [ServiceDashboardController::class, 'delete']);


Route::get('/team_create', [DashboardTeamController::class, 'create']);
Route::post('/team_store', [DashboardTeamController::class, 'store']);
Route::get('/team_list', [DashboardTeamController::class, 'list']);
Route::get('/teams_edit/{id}', [DashboardTeamController::class, 'edit']);
Route::post('/teams_update/{id}', [DashboardTeamController::class, 'update']);
Route::get('/teams_destroy/{id}', [DashboardTeamController::class, 'delete']);