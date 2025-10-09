<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;


Route::get('/admin', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/home', [AdminController::class, 'home'])->name('admin.home');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::delete('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');


Route::get('/apply', [ApplicationController::class, 'showForm'])->name('apply.form');
Route::post('/apply', [ApplicationController::class, 'submitForm'])->name('apply.submit');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view ('about');
})->name('about');

Route::get('/services',function()
{
    return view('services');
})->name('services');

Route::get('/contact', function()
{
    return view('contact');
})->name('contact');

Route::get('/voices', function()
{
    return view('voices');
})->name('voices');

Route::get('/gallery', function()
{
    return view('gallery');
})->name('gallery');

Route::get('/alumni', function()
{
    return view('alumni');
})->name('alumni');

Route::get('/eca', function()
{
    return view('eca');
})->name('eca');



Route::get('/staff/login', [StaffController::class, 'showLogin'])->name('staff.login');
Route::post('/staff/login', [StaffController::class, 'login'])->name('staff.login.submit');
Route::get('/staff/dashboard', [StaffController::class, 'dashboard'])->name('staff.dashboard');
Route::get('/staff/logout', [StaffController::class, 'logout'])->name('staff.logout');


Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');




