<?php


Route::get('/', function () { return redirect('/home'); });


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    die("Cash Cleard");
});

/************WebSite Routes**************/
Route::group(['namespace' => 'Front'], function(){
	Route::get('/home', 'FrontController@home');
	Route::get('/about', 'FrontController@about');
	Route::post('/request', 'FrontController@request');
	Route::get('/projects', 'FrontController@projects');
	Route::get('/project/{title}', 'FrontController@project_detail');
	Route::get('/masterplan', 'FrontController@masterplan');
	Route::get('/facilities', 'FrontController@facilities');
	Route::get('/faqs', 'FrontController@faqs');
	Route::get('/media', 'FrontController@media');
	Route::get('/blogs', 'FrontController@blogs');
	Route::get('/blog/{title}', 'FrontController@blog_detail');
	Route::get('/contact', 'FrontController@contact');
});







/************Admin Routes**************/
Route::match(['get', 'post'],'/login', 'LoginController@login')->name('login');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['Auth' => 'Admin']], function(){
	Route::get('dashboard', 'AdminController@dashboard');
	Route::get('profile', 'AdminController@profile');
	Route::post('profile', 'AdminController@profile');

	Route::get('/password', 'PasswordController@password');
	Route::get('/check-pwd', 'PasswordController@check');
	Route::post('/update_password', 'PasswordController@update_password');

	// Sliders
	Route::get('/slider', 'SliderController@index');
	Route::post('/slider/store', 'SliderController@store');
	Route::post('/slider/update/{id}', 'SliderController@update');
	Route::get('/slider/delete/{id}', 'SliderController@delete');


	// Projects
	Route::get('/project', 'ProjectController@index');
	Route::get('/project/create', 'ProjectController@create');
	Route::post('/project/store', 'ProjectController@store');
	Route::get('/project/edit/{id}', 'ProjectController@edit');
	Route::post('/project/update/{id}', 'ProjectController@update');
	Route::get('/project/delete/{id}', 'ProjectController@delete');

	// MasterPlan
	Route::get('/masterplan', 'MasterPlanController@index');
	Route::post('/masterplan/store', 'MasterPlanController@store');
	Route::post('/masterplan/update/{id}', 'MasterPlanController@update');
	Route::get('/masterplan/delete/{id}', 'MasterPlanController@delete');

	// Facilitie
	Route::get('/facilitie', 'FacilitieController@index');
	Route::post('/facilitie/store', 'FacilitieController@store');
	Route::post('/facilitie/update/{id}', 'FacilitieController@update');
	Route::get('/facilitie/delete/{id}', 'FacilitieController@delete');


	// Medias
	Route::get('/media', 'MediaController@index');
	Route::post('/media/store', 'MediaController@store');
	Route::post('/media/update/{id}', 'MediaController@update');
	Route::get('/media/delete/{id}', 'MediaController@delete');

	// Medias
	Route::get('/blog', 'BlogController@index');
	Route::post('/blog/store', 'BlogController@store');
	Route::post('/blog/update/{id}', 'BlogController@update');
	Route::get('/blog/delete/{id}', 'BlogController@delete');




	Route::get('logout', 'AdminController@logout');
});