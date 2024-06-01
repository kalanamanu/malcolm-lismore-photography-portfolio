<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HireMeController;


















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
})->name('welcome');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'insert'])->name('gallery');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/hireme', function () {
    return view('hireme');
})->name('hireme');

Route::get('/contactme', function () {
    return view('contactme');
})->name('contactme');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/posts/store',[App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'allPosts'])->name('posts.all');

Route::get('/posts', [App\Http\Controllers\HomeController::class, 'allPosts'])->name('posts.all');

Route::get('/posts{postId}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('edit');

Route::post('/posts{postId}/update', [App\Http\Controllers\PostController::class, 'update'])->name('posts.update');

Route::get('/{postId}/delete', [App\Http\Controllers\PostController::class, 'delete'])->name('delete');

Route::post('/submit-form', [App\Http\Controllers\HireMeController::class, 'store'])->name('submit.form');

Route::post('/submit-form', [App\Http\Controllers\HireMeController::class, 'store'])->name('submit.form');

Route::get('/reservations',[App\Http\Controllers\HiremeController::class, 'client'])->name('reservations');