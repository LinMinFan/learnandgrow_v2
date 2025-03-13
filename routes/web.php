<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\OderController;
use App\Http\Controllers\EcpayController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ClaudeController;
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

/* 綠界介接 */
Route::prefix('ecpay')->group(function () {
    Route::get('/test', function () {
        return view('ecpay.test-form');
    })->name('ecpay.test');
    Route::post('/create-order', [EcpayController::class, 'createOrder'])->name('ecpay.create.order');
    Route::post('/notify', [EcpayController::class, 'notify'])->name('ecpay.notify');
    Route::get('/return', [EcpayController::class, 'returnPage'])->name('ecpay.return');
    Route::post('/client-notify', [EcpayController::class, 'clientNotify'])->name('ecpay.client.notify');
});

/* ChatGpt */
Route::prefix('chat')->group(function () {
    Route::get('/', [ChatController::class, 'index'])->name('chat.index');
});

/* Claude */
Route::prefix('claude-ai')->group(function () {
    Route::get('/', [ClaudeController::class, 'index'])->name('claude.index');
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
