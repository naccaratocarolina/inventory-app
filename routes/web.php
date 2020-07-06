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

Route::group(['prefix' => 'app', 'middleware' => 'auth'], function($route){
  $route->get('/', 'AppController@dashboard')->name('inventory.home');
  $route->get('/create', 'InventoryController@createInventory')->name('inventory.create');
  $route->post('/create', 'InventoryController@storeInventory')->name('inventory.store');
  $route->get('/inventories', 'InventoryController@viewInventories')->name('inventory.all');
  $route->delete('/inventories/{inventory}/drop', 'InventoryController@drop')->name('inventory.delete');
});
