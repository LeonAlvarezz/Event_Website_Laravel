<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/example/{api_token}/', function (Request $request) {
    return response()->json([
        'name' => $request->name,
    ]);
})->middleware('api_token');

// Route::get('/example/products/{api_token}/', [ProductController::class,'index'])->middleware('api_token');
Route::get('products/{product}', [ProductController::class,'show']);
Route::post('products', [ProductController::class,'store']);
Route::put('products/{product}', [ProductController::class,'update']);
Route::delete('products/{product}', [ProductController::class,'delete']);

Route::get('/example/{api_token}/', [ProductController::class,'index'])->middleware('api_token');


Route::middleware('auth:api')->get('/user', function(Request $request) {
    return $request->user();
});
Route::get('/products', [ProductController::class,'index'])->middleware('auth:api');



