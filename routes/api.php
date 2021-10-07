<?php

use App\Http\Controllers\Api\Freight\FreightController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'freight/'], function () {
    Route::get('list', [FreightController::class, 'index']);
    Route::post('add', [FreightController::class, 'store']);
    Route::put('edit/{id}', [FreightController::class, 'update']);
    Route::delete('delete/{id}', [FreightController::class, 'destroy']);

});
