<?php

Route::get('/',           ['as' => 'home',          'uses' => 'GenericPagesController@homePage']);
Route::get('our-mission', ['as' => 'mission',       'uses' => 'GenericPagesController@ourMissionPage']);

Route::get('login', ['as' => 'login', 'uses' => 'GenericPagesController@loginPage']);
Route::post('login', ['as' => 'login', function() {return 'Log In Foo!';}]);


// Route::resource('members', 'MembersController');
Route::get(   'members',                  ['as' => 'members.index',   'uses' => 'MembersController@index']);
Route::get(   'sign-up',                  ['as' => 'members.create',  'uses' => 'MembersController@create']);
Route::post(  'members',                  ['as' => 'members.store',   'uses' => 'MembersController@store']);
Route::get(   'members/{name_slug}',      ['as' => 'members.show',    'uses' => 'MembersController@show']);
Route::get(   'members/{name_slug}/edit', ['as' => 'members.edit',    'uses' => 'MembersController@edit']);
Route::get(   'my-profile',               ['as' => 'my.profile',      'uses' => 'MembersController@edit']);
Route::put(   'members/{name_slug}',      ['as' => 'members.update',  'uses' => 'MembersController@update']);
Route::delete('members/{name_slug}',      ['as' => 'members.destroy', 'uses' => 'MembersController@destroy']);

