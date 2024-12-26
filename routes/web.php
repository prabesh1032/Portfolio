<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PackageController;

Route::get('/', [PackageController::class, 'home'])->name('home');
Route::get('/about', [PackageController::class, 'about'])->name('about');
Route::get('/contact', [PackageController::class, 'contact'])->name('contact');
Route::get('/projects', [PackageController::class, 'projects'])->name('projects');
Route::get('/resume', [PackageController::class, 'resume'])->name('resume');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
