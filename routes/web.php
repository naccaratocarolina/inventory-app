<?php
Auth::routes();

Route::get('/', function() {
  return redirect()->route('inventory.home');
});

/*
* defining a group route so we can apply the same url prefix & middleware to all routes in that group
* we applied a prefix of app and a middleware of auth
*/
Route::group(['prefix' => 'app', 'middleware' => 'auth'], function($route){
  $route->get('/', 'AppController@dashboard')->name('inventory.home');
});
