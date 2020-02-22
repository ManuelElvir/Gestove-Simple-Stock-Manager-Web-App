<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('/', ['uses' => 'DashboardController@index', 'as' => 'dashboard']);
    
    Route::get('dashboard', function () {
        return redirect('/');
    });

    Route::get('balance', ['uses' => 'DashboardController@balance', 'as' => 'dashboard.balance']);

    Route::get('history', ['uses' => 'DashboardController@history', 'as' => 'dashboard.history']);


    // All routes for users
    Route::resource('users','UsersController');

    Route::get('users', ['uses' => 'UsersController@index', 'as' => 'users.index']);
    Route::get('users/{username}/read', ['uses' => 'UsersController@show', 'as' => 'users.show'])->where('username', '[a-z]+');
    Route::match(array('GET', 'POST'), 'users/add', ['uses' => 'UsersController@create', 'as' => 'users.create']);
    Route::match(array('GET', 'POST'), 'users/{username}/update', ['uses' => 'UsersController@update', 'as' => 'users.update'])->where('username', '[a-z]+');
    Route::delete('users/{username}/delete', ['uses' => 'UsersController@delete', 'as' => 'users.delete'])->where('username', '[a-z]+');


    // All routes for payments
    Route::get('payments', ['uses' => 'PaymentsController@index', 'as' => 'payments.index']);
    Route::get('payments/{fact_ref}/read', ['uses' => 'PaymentsController@show', 'as' => 'payments.show'])->where('fact_ref', '[0-9a-z]+');
    Route::match(array('GET', 'POST'), 'payments/add', ['uses' => 'PaymentsController@create', 'as' => 'payments.create']);
    Route::match(array('GET', 'POST'), 'payments/{fact_ref}/update', ['uses' => 'PaymentsController@update', 'as' => 'payments.update'])->where('fact_ref', '[0-9a-z]+');

    // All routes for orders
    Route::get('orders', ['uses' => 'OrdersController@index', 'as' => 'orders.index']);
    Route::get('orders/{comd_ref}/read', ['uses' => 'OrdersController@show', 'as' => 'orders.show'])->where('comd_ref', '[0-9a-z]+');
    Route::match(array('GET', 'POST'), 'orders/add', ['uses' => 'OrdersController@create', 'as' => 'orders.create']);
    Route::match(array('GET', 'POST'), 'orders/{comd_ref}/update', ['uses' => 'OrdersController@update', 'as' => 'orders.update'])->where('comd_ref', '[0-9a-z]+');

    // All routes for products
    Route::get('products/shop', ['uses' => 'ProductsController@index_shop', 'as' => 'products.index_shop']);
    Route::get('products/store', ['uses' => 'ProductsController@index_store', 'as' => 'products.index_store']);
    Route::get('products/perimeal', ['uses' => 'ProductsController@perimeal', 'as' => 'products.perimeal']);
    Route::get('products/finished/shop', ['uses' => 'ProductsController@finished_shop', 'as' => 'products.finished_shop']);
    Route::get('products/finished/store', ['uses' => 'ProductsController@finished_store', 'as' => 'products.finished_store']);
    Route::get('products/{pro_slug}/read', ['uses' => 'ProductsController@show', 'as' => 'products.show'])->where('pro_slug', '[a-z]+');
    Route::match(array('GET', 'POST'), 'products/add', ['uses' => 'ProductsController@create', 'as' => 'products.create']);
    Route::match(array('GET', 'POST'), 'products/{pro_slug}/update', ['uses' => 'ProductsController@update', 'as' => 'products.update'])->where('pro_slug', '[a-z]+');
    Route::delete('products/{pro_slug}/delete', ['uses' => 'ProductsController@delete', 'as' => 'products.delete'])->where('pro_slug', '[a-z]+');
});


Auth::routes();


Route::get('logout', function () {
    return abort(404);
});
