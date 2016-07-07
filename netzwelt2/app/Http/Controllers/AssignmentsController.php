<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Response;
use App\ProjectAssignments;

class AssignmentsController extends Controller
{
 
    public function show()
    {
        $id=1;
        $users = DB::table('users')->select('id','first_name')->get(); //fix this query

        $projects = DB::table('projects')->select('p_name','id')->where('id',$id)->get();
        $project_assignments = DB::table('project_assignments')
            ->leftjoin('users', 'id', '=', 'person_id' )
            ->select('first_name','id')->where('project_id', $id)->get();

        //get list of users
        //get list of users under the project
        //compare list
        //if user is not under project return
        $trial = DB::table('project_assignments')
        ->join('users', 'id', '=', 'person_id')
        ->select('first_name','id')
        ->where('project_id',$id)
        ->get(); //person_id
        
        //return DB::table('projects')->select('p_name','id')->where('id',$id)->get();
        $arr = array();
        $arr2 = array();

        
        $unassigned = array_diff($users,$project_assignments);
        /*
        if users name is not in
        

        foreach ($users as $users) {
            if ((!in_array($users->first_name, $arr)) && (!in_array('1', $arr))) {
                $id = array_column($arr, 'id');
                    array_push($arr2, $users);
            }
            
        }
        */

        //$input = array_map("unserialize", array_unique(array_map("serialize", $unassigned)));
        //$input = array_unique($unassigned, SORT_REGULAR);
        //return array('users' => $unassigned);
        compare_names($users,$project_assignments);
        //print_r($id);
        
        //return array('user'=>$users,'project'=>$projects , 'projAssign' => $project_assignments);
    }  

    public function compare_names($a, $b)
    {
        return strcmp($a->first_name, $b->first_name);
    }
    

    public function store(Request $request){
       
        $proj = new ProjectAssignments;

        $proj->person_id = $request->id;
        $proj->project_id = 1;

       
        $proj->save();

        
       return "aloha";
    }

    public function destroy(Request $request){

        DB::table('project_assignments')->where('person_id', '=', $request->id)->where('project_id', '=', 1)->delete();
        return "woooah!";

    }


}

//put all assigned users in arr

//if user is not in  arr