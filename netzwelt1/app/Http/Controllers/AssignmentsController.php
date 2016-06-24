<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Projects;
use Response;
use App\ProjectAssignments;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AssignmentsController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(ProjectDao $projectsDao)
    {
        $this->middleware('auth');
    }


    public function show($id)
    {
        $users = DB::table('users')->select('id','first_name')->get(); //fix this query

        $projects = DB::table('projects')->select('p_name','id')->where('id',$id)->get();
        $project_assignments = DB::table('project_assignments')
            ->leftjoin('users', 'id', '=', 'person_id' )
            ->select('first_name','id','pid')->where('project_id', $id)->get();
        return view('assignments', ['projects' => $projects, 'users' => $users, 'project_assignments' => $project_assignments]);
    }   

    public function submit($id) {
        // Getting all post data
        $project_assignments = ProjectAssignments::destroy($id);

        return Response::json($project_assignments);
    }



}
