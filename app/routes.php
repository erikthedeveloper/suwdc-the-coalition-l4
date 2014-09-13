<?php

Route::get('/',           ['as' => 'home',          'uses' => 'GenericPagesController@homePage']);
Route::get('our-mission', ['as' => 'mission',       'uses' => 'GenericPagesController@ourMissionPage']);
Route::get('members',     ['as' => 'members.index', 'uses' => 'GenericPagesController@ourMembersPage']);
Route::get('members/{member_name}',     ['as' => 'members.show', 'uses' => 'GenericPagesController@viewMemberPage']);
