<?php

use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PositionController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('login', [UserController::class, 'loginPage'])->name('loginPage');
Route::post('auth/login', [UserController::class, 'login'])->name('login');
Route::post('auth/register', [UserController::class, 'register'])->name('register');
Route::middleware(['auth'])->group(function () {
    Route::resource('departaments', DepartamentController::class);
    Route::resource('positions', PositionController::class);
    Route::put('users/{user}', [UserController::class, 'update'])->name('user.update');
    Route::get('/users/{user}/edit',[UserController::class,'edit'])->name('user.edit');
    Route::delete('/users/{user}',[UserController::class,'delete'])->name('user.delete');
});
