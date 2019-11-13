<?php


/* Route des visiteurs*/
Route::resource('/login','LoginController');
Route::resource('/adminacceuil','IndexController');
Route::resource('/inscription','InscriptionController');
Route::post('/save_serialize_data','InscriptionController@save_serialize_data');

//Route::resource('/login','InscriptionController@create');