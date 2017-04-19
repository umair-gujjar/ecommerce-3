<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('basket/', 'BasketController@index');
Route::get('basket/clear', 'BasketController@clear');
Route::get('basket/line/count', 'BasketController@lineCount');
Route::get('basket/line/save/productId/{productId}/quantity/{quantity}', 'BasketController@lineSave');
Route::get('basket/line/delete/{basketLineId}', 'BasketController@lineDelete');
