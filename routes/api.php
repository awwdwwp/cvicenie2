<?php

use App\Http\Controllers\BookRestController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\TimeRpcController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookRpcController;
use App\Http\Controllers\BookSacController;
use App\Http\Controllers\BookApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/rpc/books/{id}/borrow', [BookRpcController::class, 'borrowBook']);
Route::post('/rpc/books/{id}/return', [BookRpcController::class, 'returnBook']);
Route::get('/sac/books/{id}', BookSacController::class);
//Route::prefix('rest')->group(function () {
//   Route::resource('books', BookRestController::class);
//});
//Route::prefix('restapi')->group(function () {
//   Route::apiResource('books', BookApiController::class);
//});

//Rest
Route::get('/rest/books', [BookRestController::class, 'index']);
Route::get('/rest/books/create', [BookRestController::class, 'create']);
Route::post('/rest/books', [BookRestController::class, 'store']);
Route::get('/rest/books/{id}', [BookRestController::class, 'show']);
Route::get('/rest/books/{id}/edit', [BookRestController::class, 'edit']);
Route::put('/rest/books{id}', [BookRestController::class, 'update']);
Route::delete('/rest/books/{id}',[BookRestController::class, 'destroy']);
// RestAPI
Route::get('/restapi/books', [BookApiController::class, 'index']);
Route::post('/restapi/books', [BookApiController::class, 'store']);
Route::get('/restapi/books/{id}',[BookApiController::class, 'show']);
Route::put('/restapi/books/{id}',[BookApiController::class, 'update']);
Route::delete('/restapi/books/{id}',[BookApiController::class, 'destroy']);
//TimeControllers
Route::get('/time', [TimeController::class, 'index']);
Route::get('/rpc/time', [TimeRpcController::class, 'getTime']);


