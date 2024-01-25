<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['jwt.auth'])->group(function () {

    /* Categoy */
    Route::post('/category/index',  [CategoryController::class, 'index']);
    Route::post('/category/create', [CategoryController::class, 'create']);
    Route::post('/category/modify', [CategoryController::class, 'modify']);
    Route::post('/category/remove', [CategoryController::class, 'remove']);

    Route::post('/cart/index',  [CartController::class, 'index']);
    Route::post('/cart/create', [CartController::class, 'create']);
    Route::post('/cart/order',  [CartController::class, 'order']);
    Route::post('/cart/remove', [CartController::class, 'remove']);
    Route::post('/cart/add_quantity',  [CartController::class, 'add_quantity']);
    Route::post('/cart/subtract_quantity', [CartController::class, 'subtract_quantity']);

    Route::post('/order/index',  [OrderController::class, 'index']);
    Route::post('/order/remove', [OrderController::class, 'remove']);

    Route::post('/product/index',  [ProductController::class, 'index']);
    Route::post('/product/create', [ProductController::class, 'create']);
    Route::post('/product/modify', [ProductController::class, 'modify']);
    Route::post('/product/remove', [ProductController::class, 'remove']);

    Route::post('/product/add_category',  [ProductController::class, 'add_category']);
    Route::post('/product/remove_category', [ProductController::class, 'remove_category']);
});

Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail']);
Route::post('/users/register', [UserController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

