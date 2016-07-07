<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class HomeController extends Controller
{
   
 
    public function index()
    {
        $projects = DB::table('projects')->get();

        return array('project' => $projects);
    }
}
