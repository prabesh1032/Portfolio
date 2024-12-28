<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProjectController;

Route::get('/', [PackageController::class, 'home'])->name('home');
Route::get('/about', [PackageController::class, 'about'])->name('about');
Route::get('/contact', [PackageController::class, 'contact'])->name('contact');
Route::get('/project', [PackageController::class, 'projects'])->name('project');
Route::get('/resume', [PackageController::class, 'resume'])->name('resume');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
Route::get('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
