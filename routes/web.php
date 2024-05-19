<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomepageController;
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

Route::get('/authentication/login', [AuthenticationController::class, 'viewLogin']);
Route::post('/authentication/login', [AuthenticationController::class, 'login'])->name('login');

Route::get('/authentication/register', [AuthenticationController::class, 'viewRegister']);
Route::post('/authentication/register', [AuthenticationController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/authentication/profile', function () {
        return view('pages.authentication.profile');
    });

    Route::get('/', [HomepageController::class, 'index']);
    Route::get('/{category}', [HomepageController::class, 'index']);

    Route::middleware('only-admins')->group(function () {
        Route::get('/dashboard/books', [BookController::class, 'index']);
        Route::get('/dashboard/books/create', [BookController::class, 'create']);
        Route::post('/dashboard/books', [BookController::class, 'store']);

        Route::get('/dashboard/categories/create', [CategoryController::class, 'create']);
        Route::get('/dashboard/categories', [CategoryController::class, 'index']);
        Route::post('/dashboard/categories', [CategoryController::class, 'store']);
    });

});
