<?php

Route::get('/',           ['as' => 'home',          'uses' => 'GenericPagesController@homePage']);
Route::get('our-mission', ['as' => 'mission',       'uses' => 'GenericPagesController@ourMissionPage']);


// Route::resource('members', 'MembersController');
Route::get(   'members',               ['as' => 'members.index',   'uses' => 'MembersController@index']);
Route::get(   'sign-up',               ['as' => 'members.create',  'uses' => 'MembersController@create']);
Route::post(  'members',               ['as' => 'members.store',   'uses' => 'MembersController@store']);
Route::get(   'members/{member_name}', ['as' => 'members.show',    'uses' => 'MembersController@show']);
Route::get(   'members/{member_name}/edit', ['as' => 'members.edit',    'uses' => 'MembersController@edit']);
Route::get(   'my-profile',            ['as' => 'my.profile',    'uses' => 'MembersController@edit']);
Route::put(   'members/{member_name}', ['as' => 'members.update',  'uses' => 'MembersController@update']);
Route::delete('members/{member_name}', ['as' => 'members.destroy', 'uses' => 'MembersController@destroy']);