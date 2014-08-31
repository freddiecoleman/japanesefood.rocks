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
    Route::get('navigation', 'CategoriesController@navigation');
    Route::get('navigation/root', 'CategoriesController@rootNavigation');
    Route::get('categories', 'CategoriesController@categories');
    Route::resource('{name}', 'FoodController');
});