<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
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

Route::get('post/create', \App\Http\Livewire\PostCreate::class)->name('createPost');
Route::get('post/{slug}', \App\Http\Livewire\Post::class);
Route::get('/counter', \App\Http\Livewire\Counter::class);

\Illuminate\Support\Facades\Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post(\Illuminate\Auth\Events\Logout::class);
Route::get('/user/list',\App\Http\Livewire\UsersList::class)->name('userList')->middleware(Admin::class);
Route::match(['get', 'post'],'/add/user',\App\Http\Livewire\AddUser::class)->name('addUser')->middleware(Admin::class);

