<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\PopularFrontsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix'=> 'main'], function () {
    Route::group(['prefix'=> 'popular-fronts'], function () {
        Route::get('/',[PopularFrontsController::class, 'index'])->name('main.popular-fronts');
    });
});
