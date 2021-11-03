<?php

use App\Http\Controllers\API\UsuariosAPIController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('usuarios',[UsuariosAPIController::class,'index']);

Route::post('usuarios',[UsuariosAPIController::class,'store']);
Route::put('usuarios/{usuario}',[UsuariosAPIController::class,'update']);
Route::get('usuarios/{usuario}',[UsuariosAPIController::class,'show']);
Route::delete('usuarios/{usuario}',[UsuariosAPIController::class,'destroy']);