<?php

/**
 * Register API
 */
Route::group(['prefix' => 'register', 'middleware' => 'guest'], function () {
	// Post register page
	Route::post('/', [
		'uses'	=> 'API\UserController@postRegister',
		'as'	=> 'api/register'
	]);
});
/**
 * Login API
 */
Route::group(['prefix' => 'login', 'middleware' => 'guest'], function () {
	// Post Login page
	Route::post('/', [
		'uses'	=> 'API\UserController@postLogin',
		'as'	=> 'api/login'
	]);
});

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
	Route::group(['prefix' => 'article'], function () {
		// API Create Article
		Route::post('/create', [
			'uses'	=> 'API\DashboardController@createArticle',
			'as'	=> 'api/dashboard/article/create'
		]);
		// API Edit Article
		Route::put('/edit', [
			'uses'	=> 'API\DashboardController@editArticle',
			'as'	=> 'api/dashboard/article/edit'
		]);
		// API Delete Article
		Route::delete('/delete', [
			'uses'	=> 'API\DashboardController@deleteArticle',
			'as'	=> 'api/dashboard/article/delete'
		]);
	});
});