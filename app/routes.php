<?php

Route::get('overview', 'OverviewController@index');
Route::resource('snakes', 'SnakesController');
Route::resource('feedings', 'FeedingsController');
Route::resource('weights', 'WeightsController');
Route::resource('sheds', 'ShedsController');
Route::resource('pairings', 'PairingsController');
