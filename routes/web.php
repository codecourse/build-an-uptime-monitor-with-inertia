<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EndpointDestroyController;
use App\Http\Controllers\EndpointIndexController;
use App\Http\Controllers\EndpointStoreController;
use App\Http\Controllers\EndpointUpdateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteDestroyController;
use App\Http\Controllers\SiteNotificationEmailDestroyController;
use App\Http\Controllers\SiteNotificationEmailStoreController;
use App\Http\Controllers\SiteStoreController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard/{site?}', DashboardController::class)
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/sites', SiteStoreController::class);
Route::post('/sites/{site}/endpoints', EndpointStoreController::class);
Route::delete('/sites/{site}', SiteDestroyController::class);

Route::get('/endpoints/{endpoint}', EndpointIndexController::class);
Route::delete('/endpoints/{endpoint}', EndpointDestroyController::class);
Route::patch('/endpoints/{endpoint}', EndpointUpdateController::class);

Route::post('/sites/{site}/notifications/emails', SiteNotificationEmailStoreController::class);
Route::delete('/sites/{site}/notifications/emails', SiteNotificationEmailDestroyController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
