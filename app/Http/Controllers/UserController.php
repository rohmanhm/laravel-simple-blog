<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
	/**
	 * Login Area
	 */
	// Get login page
    public function getLogin ()
    {
    	$title = "Please Login";
    	return view('blog.login.login', compact('title'));
    }
    /**
     * Register Area
     */
    // Get register page
    public function getRegister ()
    {
    	$title = "Please Register";
    	return view('blog.register.register', compact('title'));
    }
}
