<?php

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


Route::get('/', App\Livewire\Welcome::class)->name('welcome');

Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return redirect()->route('welcome');
    })->name('login');
    Route::get('/tambah', App\Livewire\Order\Create::class)->name('tambah');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', App\Livewire\Home::class)->name('home');
    Route::get('/order', App\Livewire\Order\Queue::class)->name('order.queue');
    Route::get('/order/progress', App\Livewire\Order\Progress::class)->name('order.progress');
    Route::get('/order/done', App\Livewire\Order\Done::class)->name('order.done');
    Route::get('/order/create', App\Livewire\Order\Create::class)->name('order.create');
});
