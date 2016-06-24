<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProjectsController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

   

    public function index()
    {
        $projects = DB::table('projects')->get();

        return view('projects', ['projects' => $projects]);
    }

}
