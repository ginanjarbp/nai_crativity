<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;
// routes/web.php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;


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

Route::get('/coba', function () {
    return view('coba');
})->name('coba');
Route::get('/', [AuthController::class, 'showWelcomePage'])->name('welcome');

Route::get('/artikel-home', [ArticleController::class, 'index'])->name('artikel.home');
Route::get('/artikel/{id}', [ArticleController::class, 'show'])->name('artikel.detail');
// Di routes/web.php
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');




Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Route untuk menampilkan form login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit'); // Route untuk proses login

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/createArtikel', [ArtikelController::class, 'create'])->name('createArtikel');
Route::get('/createArtikel/aksi', [ArtikelController::class, 'store']);
Route::get('/Artikel', [ArtikelController::class, 'index'])->name('Artikel');
// Di routes/web.php
Route::put('/artikel/{id}', [ArtikelController::class, 'update'])->name('artikel.update');







// Existing route for the dashboard
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Add these routes for the other links
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
Route::get('/admin/reports', [AdminController::class, 'reports'])->name('admin.reports');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');



// artikel
Route::resource('artikel', ArtikelController::class);