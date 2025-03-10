<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index');

/* 聯絡我 */
Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'getContact'] )->name('contact');
    Route::post('/temporary', [ContactController::class, 'temporary'] )->name('temporary');
    Route::post('/save', [ContactController::class, 'save'] )->name('contact.save');
});

/* 作品集 */
Route::prefix('portfolio')->group(function () {
    Route::get('/', [PortfolioController::class, 'index'] )->name('portfolio.index');
});


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
