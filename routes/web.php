<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhoneController;
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

//Route::get('/', function () { return view('welcome');});

Route::redirect('/', '/users');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::controller(PhoneController::class)->group(function(){
    Route::get('phones', 'index')->name('phones.index');
    Route::get('phones/create', 'create')->name('phones.create');
    Route::post('phones', 'store')->name('phones.store');
    Route::get('phones/{phone}/show', 'show')->name('phones.show');
    Route::get('phones/{phone}/edit', 'edit')->name('phones.edit');
    Route::put('phones/{phone}/update', 'update')->name('phones.update');
    Route::delete('phones/{phone}', 'destroy')->name('phones.destroy');
});