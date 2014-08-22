<?php

Route::get('/', function ()
{
    return View::make('pages.home');
});

Route::group(['prefix' => 'api/v1'], function ()
{
    Route::resource('ramen', 'RamenController');
    Route::resource('sushi', 'SushiController');
    Route::resource('udon', 'UdonController');
});