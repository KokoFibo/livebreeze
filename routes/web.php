<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/customer', function () {
    return view('livewire.customer');
})->middleware(['auth', 'verified'])->name('customer');

Route::get('/customer/id/edit', function () {
    return view('livewire.edit');
})->middleware(['auth', 'verified'])->name('customer.edit');

require __DIR__.'/auth.php';
