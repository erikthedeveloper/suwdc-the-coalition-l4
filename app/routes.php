<?php

Route::get('/',           ['as' => 'home',          'uses' => 'GenericPagesController@homePage']);
Route::get('our-mission', ['as' => 'mission',       'uses' => 'GenericPagesController@ourMissionPage']);
Route::get('members',     ['as' => 'members.index', 'uses' => 'GenericPagesController@ourMembersPage']);
