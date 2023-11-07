<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Livewire\About\AboutCreateController;
use App\Livewire\About\AboutIndexController;
use App\Livewire\About\AboutShowController;
use App\Livewire\Contact\ContactIndexController;

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
    return view('welcome');
});


Volt::route('/blog', 'blog')->name('blog');

Route::get('about', AboutIndexController::class)->name('about');
Route::get('about/create', AboutCreateController::class)->name('about.create');
Route::get('about/create/{about}', AboutShowController::class)->name('about.edit');

