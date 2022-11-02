<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/abc', function () {
    return view('welcome');
});
Route::get('/xyz', function () {
    return view('one');
});
Route::get('/pqr', function () {
    return view('onetwo');
});
Route::get('/user', function () {
 factory(\App\User::class, 3)->create();
});
//laravel crud operations routes
Route::get("/display-form","App\Http\Controllers\IController@display_form");
Route::post('formssubmit','App\Http\Controllers\IController@form_submit');
Route::get('display-form','App\Http\Controllers\IController@displaydata');
Route::get('delete-data/{id}','App\Http\Controllers\IController@deletedata');
Route::get('edit-disp/{id}','App\Http\Controllers\IController@editdisp');
Route::post('/formssubmit/{id}','App\Http\Controllers\IController@editdata');
Route::post('search-record','App\Http\Controllers\IController@search');
Route::get('/validation','App\Http\Controllers\IController@validation');
Route::post('/formssubmit','App\Http\Controllers\IController@validation_submit');
Route::get('hasone','RelationShipController@hasone');
Route::view('noaccess','noaccess');

//admin 
Route::get('/login','App\Http\Controllers\MController@login');
Route::post('/loginsubmit','App\Http\Controllers\MController@form_submit');
Route::get('/session-form','App\Http\Controllers\MController@session_form');
Route::post('/session-form-submit','App\Http\Controllers\MController@sfm');
Route::get('/para','App\Http\Controllers\MController@para');
Route::get('/form','App\Http\Controllers\MController@form');
Route::get('/logout-user','App\Http\Controllers\MController@logout');
Route::get('/addpage','App\Http\Controllers\MController@addpage');
Route::post('/forms','App\Http\Controllers\MController@forms');
// Route::post('insert','App\Http\Controllers\MController@sfm');
//ncontroller 
Route::get('/pagination','App\Http\Controllers\NController@pagination');
// Route::post('/insert','App\Http\Controllers\NController@insert');
Route::get('/page','App\Http\Controllers\NController@page');
Route::post('/page1','App\Http\Controllers\NController@page1');
Route::get('delete-data/{id}','App\Http\Controllers\NController@deletedata');
Route::get('edit-disp/{id}','App\Http\Controllers\NController@editdisp');
Route::post('c_editdata/{id}','App\Http\Controllers\NController@edit6');
Route::post('search-record','App\Http\Controllers\NController@search');
Route::get('category','App\Http\Controllers\NController@category');
Route::get('/category', function () {
    return view('addcategory');
});
Route::post('categoryname','App\Http\Controllers\NController@categoryn');
Route::get('csummary','App\Http\Controllers\NController@csummary');
Route::get('delete1/{id}','App\Http\Controllers\NController@delete1');
Route::get('edit1/{id}','App\Http\Controllers\NController@edit1');
Route::post('searchr','App\Http\Controllers\NController@search1');
Route::get('/product','App\Http\Controllers\NController@product1');
Route::post('/addproduct','App\Http\Controllers\NController@addproduct');
Route::get('/summaryproduct','App\Http\Controllers\NController@summaryproduct');
Route::get('delete1/{id}','App\Http\Controllers\NController@p_deletedata');
Route::get('edit3/{id}','App\Http\Controllers\NController@p_editdisplay');
Route::post('search2','App\Http\Controllers\NController@search3');
Route::get('change','App\Http\Controllers\MController@change');
Route::get('edit4/{id}','App\Http\Controllers\NController@edit4');
Route::post('p_editdata/{id}','App\Http\Controllers\NController@edit5');
Route::get('edit7/{id}','App\Http\Controllers\NController@edit0');
Route::post('k_editdata/{id}','App\Http\Controllers\NController@p_editsave');
Route::post('changep','App\Http\Controllers\NController@password');