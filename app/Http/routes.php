<?php

Route::get('/', 'PagesController@home');

Route::get('admin', 'AdminController@index')->name('admin');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => 'auth'], function(){
    // Tasks
    Route::get('tasks','TasksController@index')->name('tasks.index');
    Route::get('tasks/create','TasksController@create')->name('tasks.create');
    Route::post('tasks/store','TasksController@store')->name('tasks.store');

    // Projects
    Route::get('project','ProjectController@index')->name('project.index');
    Route::get('project/create','ProjectController@create')->name('project.create');
    Route::post('project/store','ProjectController@store')->name('project.store');
});


// Authentication Routes...
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

// Registration Routes...
// Route::get('register', 'Auth\AuthController@showRegistrationForm');
// Route::post('register', 'Auth\AuthController@register');

// Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');
Route::auth();