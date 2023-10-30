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

    Route::middleware('can:permission.index')->get('/permission', App\Livewire\Permission\Index::class)->name('permission.index');
    Route::middleware('can:user.index')->get('/user', App\Livewire\User\Index::class)->name('user.index');

    Route::middleware('can:order.queue')->get('/order', App\Livewire\Order\Queue::class)->name('order.queue');
    Route::middleware('can:order.progress')->get('/order/progress', App\Livewire\Order\Progress::class)->name('order.progress');
    Route::middleware('can:order.done')->get('/order/done', App\Livewire\Order\Done::class)->name('order.done');
    Route::middleware('can:order.create')->get('/order/create', App\Livewire\Order\Create::class)->name('order.create');
    Route::middleware('can:order.show')->get('/order/{order}', App\Livewire\Order\Show::class)->name('order.show');
    Route::middleware('can:order.edit')->get('/order/{order}/edit', App\Livewire\Order\Edit::class)->name('order.edit');
});
