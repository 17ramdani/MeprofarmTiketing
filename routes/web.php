<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TiketingController;
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
})->name('page.index');


Route::get('/signin', [LoginController::class, 'index'])->name('user.login');
Route::post('/loginApi', [LoginController::class, 'loginApi'])->name('loginApi');
Route::get('/tiketing/create', [TiketingController::class, 'index'])->name('tiketing.index');
Route::post('/tiketing/store', [TiketingController::class, 'store'])->name('tiketing.store');



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/tiketing', [DashboardController::class, 'read'])->name('tiketing.read');
    Route::get('/detail/{id}', [TiketingController::class, 'detail'])->name('tiketing.detail');
    Route::put('/update/{id}', [TiketingController::class, 'update'])->name('tiketing.update');
    Route::delete('/delete/{id}', [TiketingController::class, 'destroy'])->name('tiketing.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
