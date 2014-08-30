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
    Route::resource('{name}', 'FoodController');
});