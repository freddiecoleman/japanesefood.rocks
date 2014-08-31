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
    Route::get('category/{id}', 'CategoriesController@category');
    Route::get('categories', 'CategoriesController@nonRootCategories');
    Route::get('categories/all', 'CategoriesController@allCategories');
    Route::post('categories', 'CategoriesController@store');
    Route::put('categories', 'CategoriesController@update');
    Route::resource('{name}', 'FoodController');
});