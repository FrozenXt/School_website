<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\RoleMiddleware;

// ----------------- Public Routes -----------------
Route::get('/', fn() => view('welcome'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/services', fn() => view('services'))->name('services');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/voices', fn() => view('voices'))->name('voices');
Route::get('/gallery', fn() => view('gallery'))->name('gallery');
Route::get('/alumni', fn() => view('alumni'))->name('alumni');
Route::get('/eca', fn() => view('eca'))->name('eca');
Route::get('/eca/taekwondo', fn() => view('eca.taekwondo'))->name('eca.taekwondo');
Route::get('/eca/sports', fn() => view('eca.sports'))->name('eca.sports');
Route::get('/eca/dance', fn() => view('eca.dance'))->name('eca.dance');
Route::get('/eca/music', fn() => view('eca.music'))->name('eca.music');

// ----------------- Application Form -----------------
Route::get('/apply', [ApplicationController::class, 'showForm'])->name('apply.form');
Route::post('/apply', [ApplicationController::class, 'submitForm'])->name('apply.submit');

// ----------------- Admin Authentication -----------------
Route::get('/admin', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// ----------------- Admin Routes (Protected by RoleMiddleware) -----------------
Route::prefix('admin')->middleware(RoleMiddleware::class . ':superadmin,subadmin')->group(function () {

    // Dashboard accessible by both roles
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Logout
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Superadmin-only routes
    Route::middleware(RoleMiddleware::class . ':superadmin')->group(function () {
        Route::get('/home', [AdminController::class, 'home'])->name('admin.home');
        Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
        Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
        Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
    });

    // Subadmin-only routes (view only)
    Route::middleware(RoleMiddleware::class . ':subadmin')->group(function () {
        Route::get('/view', [AdminController::class, 'viewOnly'])->name('admin.view');
    });
});
