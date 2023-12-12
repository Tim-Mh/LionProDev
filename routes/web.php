<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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



Route::get('/',[\App\Http\Controllers\WebsiteController::class,'home'])->name('home');

Route::get('/pro',[\App\Http\Controllers\WebsiteController::class,'pro'])->name('pro');
Route::get('/wahlbeck/{id}',[\App\Http\Controllers\WebsiteController::class,'wahl'])->name('wahlbeck');
Route::get('/floater',[\App\Http\Controllers\WebsiteController::class,'floater'])->name('floater');

Route::get('/blogs',[\App\Http\Controllers\WebsiteController::class,'blogs'])->name('blogs');
Route::get('/about',[\App\Http\Controllers\WebsiteController::class,'about'])->name('about');
Route::get('/privacy',[\App\Http\Controllers\WebsiteController::class,'privacy'])->name('privacy');
Route::get('/terms',[\App\Http\Controllers\WebsiteController::class,'terms'])->name('terms');
Route::get('/contact',[\App\Http\Controllers\WebsiteController::class,'contact'])->name('contact');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::group(['middleware' => [\Spatie\Permission\Middlewares\RoleMiddleware::class]], function () {
    // Your routes here
});

Route::prefix('admin')->group(function () {
    Route::resource('projects', ProjectController::class);
});
Route::get('/videos/{filename}', [ProjectController::class,'getVideo'])->name('projects.video');
