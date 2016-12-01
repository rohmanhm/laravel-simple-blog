<?php

/**
 * Main blog
 */
Route::get('/', [
	'uses'	=> 'BlogController@index',
	'as'	=> 'home'
]);

/**
 * View
 */
Route::get('/view/{id}', [
	'uses'	=> 'BlogController@view',
	'as'	=> 'view'
]);

/**
 * Login Page
 */
Route::group(['prefix' => 'login', 'middleware' => 'guest'], function () {
	// Get login page
	Route::get('/', [
		'uses'	=> 'UserController@getLogin',
		'as'	=> 'login'
	]);
});

/**
 * Register page
 */
Route::group(['prefix' => 'register', 'middleware' => 'guest'], function () {
	// Get register page
	Route::get('/', [
		'uses'	=> 'UserController@getRegister',
		'as'	=> 'register'
	]);
});
/**
 * Dashboard
 */
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
	// Dashboard index
	Route::get('/', [
		'uses'	=> 'DashboardController@index',
		'as'	=> 'dashboard'
	]);
	// Dashboard article
	Route::group(['prefix' => 'article'], function () {
		// Get article list
		Route::get('/', [
			'uses'	=> 'DashboardController@article',
			'as'	=> 'dashboard/article'
		]);
		// Get create article page
		Route::get('/create', [
			'uses'	=> 'DashboardController@articleCreate',
			'as'	=> 'dashboard/article/create'
		]);
		// Get Edit article
		Route::get('/edit/{id}', [
			'uses'	=> 'DashboardController@articleEdit',
			'as'	=> 'dashboard/article/edit'
		]);
	});
});
/**
 * Logout
 */
Route::get('/logout', function () {
	if (Auth::check()) {
		Auth::logout();

		$title = 'Login page';
		$message = 'Anda berhasil keluar';
		return redirect()->route('login', compact('message, title'));
	}
})->name('logout');