<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ForgotPasswordController;
use App\Http\Controllers\API\PackageController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\SubscriptionController;
use App\Http\Controllers\API\TicketController;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;

Route::post('auth/signup', [AuthController::class, 'store']);
Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/logout', [AuthController::class, 'logout']);
Route::post('auth/refresh-token', [AuthController::class, 'refresh']);
Route::post('password-reset/email', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('password-reset/update', [ForgotPasswordController::class, 'resetPassword']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('posts', PostController::class);
    Route::apiResource('tickets', TicketController::class);

    //subscriptions and payments
    Route::controller(SubscriptionController::class)->group(function () {
        Route::post('checkout/{id}', 'checkout');
        Route::post('subscriptions', 'store');
        Route::get('subscriptions/{subscription}', 'show');
        Route::put('subscriptions/{subscription}', 'update');
        Route::delete('subscriptions/{subscription}', 'destroy');
    });

});
