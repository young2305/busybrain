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

/*
Route::get('/', function () {
    return view('welcome');
});*/


//Groupe pour les gections des different partie
Route::group(['middleware' => ['Admin'], 'namespace' => 'Admin' ], function(){
	require_once __DIR__ . '/admin.php';
});

Route::group(['middleware' => ['User'], 'namespace' => 'User' ], function(){
	require_once __DIR__ . '/user.php';
});

	require_once __DIR__ . '/guest.php';
