<?php

Route::get('/', function ()
{
    return View::make('pages.home');
});

Route::get('/admin', function ()
{
    return View::make('pages.admin');
});

Route::get('/!', function ()
{
    return View::make('pages.app');
});

Route::group(['prefix' => 'api/v1'], function ()
{
    Route::get('navigation', 'CategoriesController@navigation');
    Route::get('categories', 'CategoriesController@categories');
    Route::resource('{name}', 'FoodController');
});