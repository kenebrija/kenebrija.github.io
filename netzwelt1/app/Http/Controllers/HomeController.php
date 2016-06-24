<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller{

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

	public function showLogin()
	{
	    return view('login');
	}

	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
		    'username'    => 'required|email', // make sure the email is an actual email
		    'password' => 'required|alphaNum|min:7' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		    return Redirect::to('login')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

		    // create our user data for the authentication
		    $userdata = array(
		        'username'     => Input::get('username'),
		        'password'  => Input::get('password')
		    );

		    // attempt to do the login
		    if (Auth::attempt($userdata)) {

		      
		        return redirect('/');

		    } else {        

		        // validation not successful, send back to form 
		        return redirect('login');

		    }

		}
	}

	public function logout() {
	  	Auth::logout(); // logout user
	  	return redirect('login'); //redirect back to login
	}
}