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
    Route::get('project/edit/{id}','ProjectController@edit')->name('project.edit');
    Route::post('project/update','ProjectController@update')->name('project.update');
    Route::get('project/delete/{id}','ProjectController@delete')->name('project.delete');

    // Comments
    Route::get('comments/{id}','CommentController@index')->name('comment.index');
    Route::get('comments/create/{id}','CommentController@create')->name('comment.create');
    Route::post('comments/store','CommentController@store')->name('comment.store');
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