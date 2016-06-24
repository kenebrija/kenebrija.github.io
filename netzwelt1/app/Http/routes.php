<?php

use App\ProjectAssignments;
use Illuminate\Http\Request;
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

Route::get('/', 'MainController@index');


Route::get('projects', ['middleware' => 'auth', 'uses'=>'ProjectsController@index']);


Route::get('login', array('uses' => 'HomeController@showlogin'));

Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('logout', array('uses' => 'HomeController@logout'));


Route::get('projects/create',['as' => 'projects/create', 'uses' => 'NewProjectsController@showForm']); //display the page


Route::post('projects/create', ['as' => 'projects/create', 'uses' => 'NewProjectsController@submit']); //submit the new project


Route::get('persons/create',['as' => 'persons/create', 'uses' => 'NewPersonsController@showForm']); //display the page


Route::post('persons/create', ['as' => 'persons/create', 'uses' => 'NewPersonsController@submit']); //submit the new project

Route::get('projects/assignments/{id}','AssignmentsController@show');


Route::post('projects/assignments/{id}',function(Request $request){
    $project_assignments = ProjectAssignments::create($request->all());

    return Response::json($project_assignments);
});


Route::delete('projects/assignments/{id}',function($person_id){
    
    $project_assignments = ProjectAssignments::destroy($person_id);

    return Response::json($project_assignments);
       
});
/*
Route::delete('projects/assignments/{id}', 'AssignmentsController@submit');



Route::get('/', function(){
	View::make('index'); //app/views/index.php
});


Route::group(array('prefix' => 'api'), function(){
	Route::resource('projects', 'NewProjectsController',
		array('only' => array('index', 'store')));
});

App::missing(function($exception){
	return View::make('index');
});