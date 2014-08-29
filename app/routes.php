<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});*/

Route::get('/','grabnshow@gns');

Route::get('waa',function()
{
	return View::make('waa');
});

Route::get('kkk',function()
{
	return View::make('kkk.waa');
});

Route::get('makepage/{id}','makepage@makewaa');


//Route::get('/firstxx','grabnshow@gns');

//-----------Message-------------//

Route::get('create',function()
{
	return View::make('userinput');
});
Route::post('createcontent','ContentController@actionCreate');

Route::get('update/{mbid}', 'ContentController@actionOldmessage');

Route::post('updated/{mbid}', 'ContentController@actionUpdate');

Route::get('delete/{mbid}', 'ContentController@actionDelete');

//-------------News--------------//

Route::get('newsupdate', 'NewsController@actionOldnews');

Route::post('updatednews/{newsid}', 'NewsController@actionUpdate');

//Route::controller('home');