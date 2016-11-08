<?php


Route::get('error', function(){ 
   abort(500);
});

Route::group(['prefix' => 'dashboard','middleware' => ['auth'], 'namespace' => 'Dashboard'], function(){

    Route::get('/',      ['uses' => 'DashboardController@index',  'as' => 'index_dashboard']);

});


Route::group(['prefix' => 'social','middleware' => ['auth'], 'namespace' => 'Social'], function(){

    Route::get('/',            ['uses' => 'SocialController@index',  'as' => 'index_social']);

    Route::get('/create',      ['uses' => 'SocialController@create',  'as' => 'create_social']);

    Route::get('/edit/{id}',['uses' => 'SocialController@edit',  'as' => 'edit_social']);

    Route::post('/store',['uses' => 'SocialController@store',  'as' => 'store_social']);

    Route::post('/update/{id}',['uses' => 'SocialController@update',  'as' => 'update_social']);

    Route::get('/destroy/{id}',['uses' => 'SocialController@destroy',  'as' => 'destroy_social']);

});

Route::group(['prefix' => 'club','middleware' => ['auth'], 'namespace' => 'Club'], function(){

    Route::get('/',            ['uses' => 'ClubController@index',  'as' => 'index_club']);

    Route::get('/create',      ['uses' => 'ClubController@create',  'as' => 'create_club']);

    Route::get('/edit/{id}',['uses' => 'ClubController@edit',  'as' => 'edit_club']);

    Route::post('/store',['uses' => 'ClubController@store',  'as' => 'store_club']);

    Route::post('/update/{id}',['uses' => 'ClubController@update',  'as' => 'update_club']);

    Route::get('/destroy/{id}',['uses' => 'ClubController@destroy',  'as' => 'destroy_club']);

});



Route::group(['prefix' => '', 'namespace' => 'Login'], function(){

    Route::get('/',             ['uses' => 'LoginController@index', 'middleware' => ['guest'] ,     'as' => 'index_login']);

    Route::post('login',        ['uses' => 'LoginController@store',    'as' => 'post_login']);

    Route::get('logout',        ['uses' => 'LoginController@logout',     'as' => 'logout_login']);

});

Route::group(['prefix' => 'config','middleware' => ['auth'], 'namespace' => 'Config'], function(){

    Route::get('/',            ['uses' => 'ConfigController@index',  'as' => 'index_config']);

    Route::post('/update/{id}',['uses' => 'ConfigController@update',  'as' => 'update_config']);



});


Route::group(['prefix' => 'ajax','middleware' => ['auth'], 'namespace' => 'Helper'], function(){

    Route::get('city/{id}',            ['uses' => 'HelperController@city',  'as' => 'ajax_city']);

    Route::get('unique/{email}',            ['uses' => 'HelperController@uniqueEmail',  'as' => 'ajax_unique_email']);


});

Route::group(['prefix' => 'upload','middleware' => ['auth'], 'namespace' => 'Upload'], function(){

    Route::post('',            ['uses' => 'UploadController@store',  'as' => 'post_upload']);



});
