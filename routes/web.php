<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LandlordController;
use App\Http\Controllers\CleanerController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\DailyupdateController;
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
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact_us');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resources([
        'landlord' => LandlordController::class,
        'cleaner' => CleanerController::class,
        'volunteer' => VolunteerController::class,
        'dailyupdate' => DailyupdateController::class
    ]);

    Route::get('/landlord-active/{id}', [LandlordController::class, 'active'])->name('landlord_active');
    Route::get('/landlord-pending/{id}', [LandlordController::class, 'pending'])->name('landlord_pending');

    Route::get('/cleaner-active/{id}', [CleanerController::class, 'active'])->name('cleaner_active');
    Route::get('/cleaner-pending/{id}', [CleanerController::class, 'pending'])->name('cleaner_pending');

    Route::get('/volunteer-active/{id}', [VolunteerController::class, 'active'])->name('volunteer_active');
    Route::get('/volunteer-pending/{id}', [VolunteerController::class, 'pending'])->name('volunteer_pending');

    Route::get('/volunteer_profile', [VolunteerController::class, 'volunteer_profile'])->name('volunteer_profile');
    Route::get('/complain_index', [HomeController::class, 'complain_index'])->name('complain_index');
    Route::get('/complain_index_volunteer', [VolunteerController::class, 'complain_index_volunteer'])->name('complain_index_volunteer');
    Route::get('/dailyupdatevolunteer-index', [VolunteerController::class, 'dailyupdateindex'])->name('dailyupdatevolunteer.index');

    Route::get('/holding_no_search', [VolunteerController::class, 'get_holding'])->name('holding_no_search');
});

//user
Route::get('/user_dashboard', [LandlordController::class, 'dashboard'])->name('user_dashboard');
Route::get('/user_login', [LandlordController::class, 'login'])->name('user_login');
Route::get('/user_profile', [LandlordController::class, 'profile'])->name('user_profile');
Route::get('/user_profile_show', [LandlordController::class, 'profile_show'])->name('user_profile_show');

Route::get('/dailyupdateuser-index/{id}', [LandlordController::class, 'dailyupdateindex'])->name('dailyupdateuser.index');
Route::get('/complain-store/{id}', [LandlordController::class, 'complain'])->name('complain.store');
require __DIR__.'/auth.php';
