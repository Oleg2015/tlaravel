<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses'=>'Admin\IndexController@show','as'=>'home']);

Route::get('/about',['uses'=>'Admin\AboutController@show','as'=>'about']);


Route::get('/articles',['uses'=>'Admin\Core@getArticles','as'=>'articles']);


Route::get('/article/{id}',['uses'=>'Admin\Core@getArticle','as'=>'article'/*,'middleware'=>'mymiddle:home'*/]);

Route::get('/contact',['middleware' => ['auth'],'uses'=>'Admin\ContactController@show','as'=>'contact']);
Route::post('/contact',['uses'=>'Admin\ContactController@store']);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	//
});

Route::group(['middleware' => 'web'], function () {
Route::auth();
	
//	Route::get('/login',['uses'=>'Auth\MyAuthController@showLogin']);
//	Route::post('/login',['uses'=>'Auth\MyAuthController@authenticate']);
//Route::get('/home', 'HomeController@index');

});

 
//Route::auth();
// admin/add/post
//Route::group(['prefix'=>'admin','middleware'=>['web','auth.basic']],function() {
//	
//	// admin/
//	Route::get('/',['uses'=>'Admin\AdminController@show','as'=>'admin_index']);
//	Route::get('/add/post',['uses'=>'Admin\AdminPostController@create','as'=>'admin_add_post']);
//
//});

//admin/add/update
Route::group(['prefix'=>'admin','middleware'=>['auth']],function() {

	// admin/  
	Route::get('/',['uses'=>'Admin\AdminController@show','as'=>'admin_index']);
	
	Route::get('/add/post',['uses'=>'Admin\AdminPostController@show','as'=>'admin_add_post']);
	Route::post('/add/post',['uses'=>'Admin\AdminPostController@create','as'=>'admin_add_post_p']);
	
	Route::get('/update/post/{id}',['uses'=>'Admin\AdminUpdatePostController@show','as'=>'admin_update_post']);
	Route::post('/update/post',['uses'=>'Admin\AdminUpdatePostController@create','as'=>'admin_update_post_p']);

});






