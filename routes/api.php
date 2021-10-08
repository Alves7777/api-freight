<?php

use App\Http\Controllers\Api\Freight\FreightController;
use App\Http\Controllers\Auth\AuthApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth', [AuthApiController::class, 'login']);
Route::get('me', [AuthApiController::class, 'getAuthenticatedUser']);
Route::post('auth-refresh', [AuthApiController::class, 'refreshToken']);

Route::group(['prefix' => 'freight/', 'middleware' => 'auth:api'], function () {
    Route::get('list', [FreightController::class, 'index']);
    Route::post('add', [FreightController::class, 'store']);
    Route::put('edit/{id}', [FreightController::class, 'update']);
    Route::delete('delete/{id}', [FreightController::class, 'destroy']);

});
