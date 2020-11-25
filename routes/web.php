<?php

// Auth::routes();


/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------|
*/ 
Route::prefix('')->namespace('Front')->group(function () {
    Route::name('index')->get('/', 'IndexController@index');
    Route::name('news')->get('news/{id}', 'IndexController@news');
    Route::name('gallery')->get('gallery', 'IndexController@gallery');
    Route::name('admission')->get('admission', 'IndexController@admission');
    Route::name('contact')->get('contact', 'IndexController@contact');
    Route::name('tocontact')->post('tocontact', 'IndexController@tocontact');
    Route::name('about')->get('about', 'IndexController@about');
});


/*
|--------------------------------------------------------------------------
| Back-end
|--------------------------------------------------------------------------|
*/
Route::name('login')->get('/admin', 'Auth\LoginController@showLoginForm');
Route::post('/admin', 'Auth\LoginController@login');
Route::name('logout')->post('/logout', 'Auth\LoginController@logout');

Route::prefix('admin')->middleware('auth')->namespace('Admin')->group(function(){
    Route::name('dashboard')->get('/dashboard', 'AdminController@index');

    // back news part
    Route::resource('news', 'NewsController');
    Route::name('news-upload')->post('/news/create', 'NewsController@upload');

    // back gallery part
    Route::resource('galleries', 'GalleryController');
    Route::name('gallery-upload')->post('/galleries/create', 'GalleryController@upload');

    // back contact part
    Route::name('admin-contact')->get('/contact', 'ContactController@index');
    Route::get('/deleteone', 'ContactController@deleteOne');

    // back employee part
    Route::resource('employees', 'EmployeeController');
    Route::name('employee-upload')->post('/employees/create', 'EmployeeController@upload');

    // back slider part
    Route::resource('sliders', 'SliderController');
    Route::name('slider-upload')->post('/sliders/create', 'SliderController@upload');

    // back user part
    Route::resource('users', 'UserController')->middleware('admin');

});
