<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LandlordController;
use App\Http\Controllers\CleanerController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/volunteer-apply', [FrontendController::class, 'volunteer_apply'])->name('volunteer_apply');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resources([
        'landlord' => LandlordController::class,
        'cleaner' => CleanerController::class,
        'volunteer' => VolunteerController::class
    ]);

    Route::get('/landlord-active/{id}', [LandlordController::class, 'active'])->name('landlord_active');
    Route::get('/landlord-pending/{id}', [LandlordController::class, 'pending'])->name('landlord_pending');

    Route::get('/cleaner-active/{id}', [CleanerController::class, 'active'])->name('cleaner_active');
    Route::get('/cleaner-pending/{id}', [CleanerController::class, 'pending'])->name('cleaner_pending');
});

require __DIR__.'/auth.php';
