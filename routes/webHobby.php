<?php 


Route::get('/hobbies', 'HobbiesController@index');
Route::get('/addHobby', 'HobbiesController@create');

Route::post('/storeHobby', 'HobbiesController@store');

Route::get('viewHobby/{id}', 'HobbiesController@view');


Route::get('editHobby/{id}', 'HobbiesController@edit');
Route::post('/updateHobby/{id}', 'HobbiesController@update');

Route::get('/deleteHobby/{id}', 'HobbiesController@delete');
Route::post('/deleteConfirm/{id}', 'HobbiesController@destroy');

 ?>