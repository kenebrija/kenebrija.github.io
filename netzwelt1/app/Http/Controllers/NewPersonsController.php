<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class NewPersonsController extends Controller
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
        return view('newperson');
    }


    public function submit()
    {
        $users = new User;
        $users->last_name = Input::get('last_name');
        $users->first_name = Input::get('first_name');
        $users->username = Input::get('username');
        $users->password = bcrypt(Input::get('password'));

        $users->save();

        return redirect('projects');
    }
}
