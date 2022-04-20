<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('products', [ProductController::class, 'index']);

Route::group(['prefix' => 'products'], function () {
    Route::post('add', [PostController::class, 'add']);
    Route::get('edit/{id}', [PostController::class, 'edit']);
    //Route::post('update/{id}', 'PostController@update');
    //Route::delete('delete/{id}', 'PostController@delete');
});
