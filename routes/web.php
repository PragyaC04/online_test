<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/new', function () {
    return view('newtest');
})->name('backto');

 Route::get('/qview', function () {
    return view('viewqualitative');
}); 

Route::get('/aview', function () {
    return view('viewanalytical');
});  

Route::get('/cview', function () {
    return view('viewcreative');
});

Route::get('/coview', function () {
    return view('viewcomprehension');
});
*/

Route::get('/question/{sid}','QuestController@display');

Route::get('/qualitative', 'QualitativeController@index');
Route::post('/qualitative' , [ 'as' => 'qualitative.add' , 'uses' => 'QualitativeController@store']);
Route::get('/qview/{sid}', 'QualitativeController@display');
Route::get('/new', 'QualitativeController@test');
Route::get('/qualitative', 'QualitativeController@edit');

Route::get('/analytical', 'AnalyticalController@index');
Route::post('/analytical' , [ 'as' => 'analytical.add' , 'uses' => 'AnalyticalController@store']);
Route::get('/aview/{sid}', 'AnalyticalController@display');

Route::get('/creative', 'CreativeController@index');
Route::post('/creative' , [ 'as' => 'creative.add' , 'uses' => 'CreativeController@store']);
Route::get('/cview/{sid}', 'CreativeController@display');

Route::get('/comprehension', 'ComprehensionController@index');
Route::post('/comprehension' , [ 'as' => 'comprehension.add' , 'uses' => 'ComprehensionController@store']);
Route::get('/coview/{sid}', 'ComprehensionController@display');