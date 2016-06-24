<?php

namespace App\Http\Controllers;

use App\Projects;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class NewProjectsController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function showForm()
    {
        return view('newproject');
    }


    public function submit()
    {
        $proj = new Projects;

        $proj->p_code =Input::get('p_code');
        $proj->p_name = Input::get('p_name');
        $proj->p_remarks =Input::get('p_remarks');
        $proj->p_budget =Input::get('p_budget');
       
        $proj->save();

        return redirect('projects');
    }/*

    public function index(){
        return Response::json(Projects::get());
    }

    public function store(){
        Projects::create(array(
            'p_code' => Input::get('p_code'),
            'p_name' => Input::get('p_name'),
            'p_remarks'=> Input::get('p_remarks'),
            'p_budget' => Input::get('p_budget')

        ));

        return Response::json(array('succes' => true));
    }*/
}
