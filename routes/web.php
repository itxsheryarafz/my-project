<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blog', [BlogController::class, 'show'])->name('blog');

Route::post('/addblog', [BlogController::class, 'create'])->name('addblog');

Route::get('/displayblog', [BlogController::class, 'display'])->name('displayblog');

Route::get('/deleteblog/{id}', [BlogController::class, 'deletedata'])->name('deleteblog');

Route::get('/editdata/{id}', [BlogController::class, 'displayedit'])->name('editdata');

Route::post("/savedata", [BlogController::class, 'postdata'])->name('update-blog-data');
