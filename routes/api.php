<?php

use App\Http\Controllers\CategoryContoller;
use App\Http\Controllers\IngatlanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/ingatlanok', [IngatlanController::class, 'index']);
Route::post('/ingatlanok', [IngatlanController::class, 'store']);
Route::get('/kategoriak', [CategoryContoller::class, 'index']);
//Route::get('/kategoriak_ingatlanokkal', [CategoryController::class, 'index']);
Route::delete('/ingatlanok/{id}', [IngatlanController::class, 'destroy']);