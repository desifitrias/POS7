<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/product', [ApiController::class, 'product_index']);
Route::post('/product/add', [ApiController::class, 'product_store']);
Route::get('/product/{id}', [ApiController::class, 'product_by_id']);
Route::delete('/product/{id}', [ApiController::class, 'product_delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
