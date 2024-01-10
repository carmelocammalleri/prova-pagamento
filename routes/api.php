<?php

use App\Http\Controllers\Api\Orders\OrderController;
use App\Http\Controllers\Api\Products\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/generate', [OrderController::class, 'generate']);
Route::post('/makePayment', [OrderController::class, 'makePayment']);
Route::get('/products',[ProductController::class, 'index']);
