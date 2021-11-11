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

Route::view('/', 'home');

Route::get('post/create', \App\Http\Livewire\PostCreate::class);
Route::get('post/{slug}', \App\Http\Livewire\Post::class);
Route::get('/counter', \App\Http\Livewire\Counter::class);

\Illuminate\Support\Facades\Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post(\Illuminate\Auth\Events\Logout::class);
