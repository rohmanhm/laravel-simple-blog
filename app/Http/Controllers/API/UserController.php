<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\User;

class UserController extends Controller
{
	// API Post Register
    public function postRegister (Request $request)
    {
    	// Make validation
    	$this->validate($request, [
	        'name' => 'required|max:100',
	        'username' => 'required|min:5|max:100|unique:users,username',
	        'password' => 'required|min:6',
	        'email' => 'required|unique:users,email'
	    ]);

    	$name = $request->name;
    	$username = $request->username;
    	$password = bcrypt($request->password);
    	$email = $request->email;

    	$user = new User();
    	$user->name = $name;
    	$user->username = $username;
    	$user->email = $email;
    	$user->password = $password;
    	// Save to database;
    	$user->save();
    	// Auto login when succes register
    	Auth::loginUsingId($user->id);

        $status = [
            'status' => 'success',
            'data'  => $user
        ];

    	return json_encode($status);
    }

    // API Post Login
    public function postLogin (Request $request)
    {
        $this->validate($request, [
            'username'  => 'required|exists:users',
            'password'  => 'required'
        ]);

        $auth = Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ], true);

        $status = [
            'status' => 'success'
        ];

        if (!$auth) {
            $status = [
                'status' => 'error'
            ];  
        }

        return json_encode($status);
    }
}
