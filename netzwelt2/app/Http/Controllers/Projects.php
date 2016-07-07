<?php

namespace App\Http\Controllers;

use App\Project;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;

class Projects extends Controller
{
    public function store(Request $request) {

    	/*$this->validate($request, [
        'code' => 'required|max:50',
        'name' => 'required|max:50|alpha',
        'remarks' => 'required|max:255',
        'budget' => 'required|numeric',
   		 ]);

    	
        $proj = new Project;

        $proj->p_code = $request->input('code');
        $proj->p_name = $request->input('name');
        $proj->p_remarks = $request->input('remarks');
        $proj->p_budget = $request->input('budget');

       
        $proj->save();
    */
       	//$projects = DB::table('projects')->get();

        return $request;
    }

    public function index(){
    	return view('index');
    }

    public function show(){

        return DB::table('projects')->get();
    }

}
