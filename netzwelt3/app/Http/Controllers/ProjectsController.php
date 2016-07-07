<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Http\Requests;
use App\Project;

class ProjectsController extends Controller
{
    public function submit(Request $request){
    	$proj = new Project;

        $proj->p_code = $request->input('p_code');
        $proj->p_name = $request->input('p_name');
        $proj->p_remarks = $request->input('p_remarks');
        $proj->p_budget = $request->input('p_budget');

       
        $proj->save();
        return "succes";
    }
}
