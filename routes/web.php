<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ChakriController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ChakriDetailsController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('frontend.home');
Route::get('/chakris/{chakri}', ChakriDetailsController::class)->name('frontend.chakri_details');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('admin.dashboard');
    Route::resource('chakris', ChakriController::class, ['as' => 'admin']);
});

require __DIR__ . '/auth.php';
