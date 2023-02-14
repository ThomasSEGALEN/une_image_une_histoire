<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Redirect;
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
    return Redirect::to('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/services', function () {
    //TODO
})->name('services');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/terms-of-use', function () {
    //TODO
})->name('tos');

Route::post('/contact', [ContactController::class, 'store'])->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group([
        'prefix' => 'dashboard',
        'as' => 'dashboard.',
    ], function () {
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::patch('/users/{user}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

        Route::get('/pictures', [PictureController::class, 'index'])->name('pictures.index');
        Route::get('/pictures/create', [PictureController::class, 'create'])->name('pictures.create');
        Route::post('/pictures', [PictureController::class, 'store'])->name('pictures.store');
        Route::get('/pictures/{picture}/edit', [PictureController::class, 'edit'])->name('pictures.edit');
        Route::patch('/pictures/{picture}', [PictureController::class, 'update'])->name('pictures.update');
        Route::delete('/pictures/{picture}', [PictureController::class, 'destroy'])->name('pictures.destroy');
    });
});

require __DIR__ . '/auth.php';
