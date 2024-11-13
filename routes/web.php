<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// routes/web.php

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Route untuk menampilkan form login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit'); // Route untuk proses login

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




// Existing route for the dashboard
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Add these routes for the other links
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
Route::get('/admin/reports', [AdminController::class, 'reports'])->name('admin.reports');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
