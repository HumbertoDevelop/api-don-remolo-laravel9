<?php

use App\Http\Controllers\BebidaController;
use App\Http\Controllers\EmpanadaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\PostreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('/bebidas', BebidaController::class);
Route::apiResource('/empanadas', EmpanadaController::class);
Route::apiResource('/pizzas', PizzaController::class);
Route::apiResource('/postres', PostreController::class);
Route::apiResource('/pedidos', PedidoController::class);