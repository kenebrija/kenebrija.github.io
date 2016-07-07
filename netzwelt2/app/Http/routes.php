<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', 'Projects@index');

Route::post('api/v1/projects/add', 'Projects@store');


Route::get('api/v1/projects/add/{id}','AssignmentsController@show');
Route::get('api/v1/projects/add/{id}','AssignmentsController@index');

Route::get('/', function () {
    return view('index');
});
*/


Route::get('/', 'Projects@index');


Route::post('/projects/add', 'Projects@store');
Route::get('/projects/list', 'Projects@show');

Route::get('/projects/assign', 'AssignmentsController@show');

Route::post('/projects/user/save', 'AssignmentsController@store');
Route::delete('/projects/user/delete',  'AssignmentsController@destroy');




