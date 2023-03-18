<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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



Route::get('/',[PagesController::class,'index']);
route::resource('blog', PostController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile/store/{id}', [ProfileController::class, 'store']);

