<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ToolsController;
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

Route::get('products', [ProductsController::class, 'index']);
Route::get('products/{id}', [ProductsController::class, 'show']);
Route::post('products', [ProductsController::class, 'store']);
Route::put('products/{id}', [ProductsController::class, 'update']);
Route::delete('products/{id}', [ProductsController::class, 'delete']);

Route::get('tools', [ToolsController::class, 'index']);
Route::get('tools/{id}', [ToolsController::class, 'show']);
Route::post('tools', [ToolsController::class, 'store']);
Route::put('tools', [ToolsController::class, 'update']);
Route::delete('tools/{id}', [ToolsController::class, 'delete']);