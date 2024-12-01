<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScreenAddController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\dashboard\DashboardLayananController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ScreenAddController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/test',[HomeController::class, 'index']);
    Route::get('/dashboard',[DashboardController::class, 'index']);
    route::resource('/dashboard/layanan', DashboardLayananController::class);
});



require __DIR__.'/auth.php';
