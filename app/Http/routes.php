<?php


Route::get('error', function(){ 
   abort(500);
});

Route::group(['prefix' => 'admin','middleware' => ['auth'], 'namespace' => 'Dashboard'], function(){

    Route::get('/',      ['uses' => 'DashboardController@index',  'as' => 'index_dashboard']);

});

Route::group(['prefix' => '', 'namespace' => 'Site'], function(){

    Route::get('/',      ['uses' => 'SiteController@index',  'as' => 'index_site']);

    Route::get('/{slug}',      ['uses' => 'SiteController@content',  'as' => 'index_site']);

});

Route::group(['prefix' => 'admin/social','middleware' => ['auth'], 'namespace' => 'Social'], function(){

    Route::get('/',            ['uses' => 'SocialController@index',  'as' => 'index_social']);

    Route::get('/create',      ['uses' => 'SocialController@create',  'as' => 'create_social']);

    Route::get('/edit/{id}',['uses' => 'SocialController@edit',  'as' => 'edit_social']);

    Route::post('/store',['uses' => 'SocialController@store',  'as' => 'store_social']);

    Route::post('/update/{id}',['uses' => 'SocialController@update',  'as' => 'update_social']);

    Route::get('/destroy/{id}',['uses' => 'SocialController@destroy',  'as' => 'destroy_social']);

});

Route::group(['prefix' => 'admin/module','middleware' => ['auth'], 'namespace' => 'Module'], function(){

    Route::get('/',            ['uses' => 'ModuleController@index',  'as' => 'index_module']);

    Route::get('/create',      ['uses' => 'ModuleController@create',  'as' => 'create_module']);

    Route::get('/edit/{id}',['uses' => 'ModuleController@edit',  'as' => 'edit_module']);

    Route::post('/store',['uses' => 'ModuleController@store',  'as' => 'store_module']);

    Route::post('/update/{id}',['uses' => 'ModuleController@update',  'as' => 'update_module']);

    Route::get('/destroy/{id}',['uses' => 'ModuleController@destroy',  'as' => 'destroy_module']);

});


Route::group(['prefix' => 'admin/club','middleware' => ['auth'], 'namespace' => 'Club'], function(){

    Route::get('/',            ['uses' => 'ClubController@index',  'as' => 'index_club']);

    Route::get('/create',      ['uses' => 'ClubController@create',  'as' => 'create_club']);

    Route::get('/edit/{id}',['uses' => 'ClubController@edit',  'as' => 'edit_club']);

    Route::post('/store',['uses' => 'ClubController@store',  'as' => 'store_club']);

    Route::post('/update/{id}',['uses' => 'ClubController@update',  'as' => 'update_club']);

    Route::get('/destroy/{id}',['uses' => 'ClubController@destroy',  'as' => 'destroy_club']);

});

Route::group(['prefix' => 'admin/content','middleware' => ['auth'], 'namespace' => 'Content'], function(){

    Route::get('/',            ['uses' => 'ContentController@index',  'as' => 'index_content']);

    Route::get('/create',      ['uses' => 'ContentController@create',  'as' => 'create_content']);

    Route::get('/edit/{id}',['uses' => 'ContentController@edit',  'as' => 'edit_content']);

    Route::post('/store',['uses' => 'ContentController@store',  'as' => 'store_content']);

    Route::post('/update/{id}',['uses' => 'ContentController@update',  'as' => 'update_content']);

    Route::get('/destroy/{id}',['uses' => 'ContentController@destroy',  'as' => 'destroy_content']);

});

Route::group(['prefix' => 'admin/login', 'namespace' => 'Login'], function(){

    Route::get('/',             ['uses' => 'LoginController@index', 'middleware' => ['guest'] ,     'as' => 'index_login']);

    Route::post('/login',        ['uses' => 'LoginController@store',    'as' => 'post_login']);

    Route::get('/end',        ['uses' => 'LoginController@logout',     'as' => 'logout_login']);

});

Route::group(['prefix' => 'admin/config','middleware' => ['auth'], 'namespace' => 'Config'], function(){

    Route::get('/',            ['uses' => 'ConfigController@index',  'as' => 'index_config']);

    Route::post('/update/{id}',['uses' => 'ConfigController@update',  'as' => 'update_config']);



});

Route::group(['prefix' => 'admin/ajax','middleware' => ['auth'], 'namespace' => 'Helper'], function(){

    Route::get('city/{id}',            ['uses' => 'HelperController@city',  'as' => 'ajax_city']);

    Route::get('unique/{email}',            ['uses' => 'HelperController@uniqueEmail',  'as' => 'ajax_unique_email']);


});

Route::group(['prefix' => 'admin/upload','middleware' => ['auth'], 'namespace' => 'Upload'], function(){

    Route::post('',            ['uses' => 'UploadController@store',  'as' => 'post_upload']);



});
