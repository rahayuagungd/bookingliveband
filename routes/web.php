<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;

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


Route::prefix('dashboard')->group(function(){
    Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

});

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/band', [App\Http\Controllers\BandController::class, 'index'])->name('band');
    Route::get('/band/create', [BandController::class, 'create'])->name('band.create');
    Route::get('/band/edit', [BandController::class, 'edit'])->name('band.edit');
    Route::post('/logout/coba', [LoginController::class, 'destroy']);
});

// Route::controller(BandController::class)->prefix('band')->group(function() {
//     Route::get('/'. 'index')->name('band');
// });
Route::get('/', [HomeController::class, 'index']);
