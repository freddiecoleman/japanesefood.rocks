<?php

Route::get('/', function ()
{
    return View::make('pages.home');
});

Route::get('/!', function ()
{
    return View::make('pages.app');
});

Route::group(['prefix' => 'api/v1'], function ()
{
    Route::resource('categories', 'CategoriesController');
    Route::resource('ramen', 'RamenController');
    Route::resource('sushi', 'SushiController');
    Route::resource('udon', 'UdonController');
});