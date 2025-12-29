<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix'=> 'main'], function () {
    Route::group(['prefix'=> 'popular-ronts'], function () {
        Route::get('/','main')->name('main.popular-fronts');
    });
});
