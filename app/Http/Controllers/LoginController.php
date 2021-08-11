<?php

namespace App\Http\Controllers;
use App\Models\User;
use Session;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    /**
     * Login page.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('steel-works.login');
    }

    /**
     * Sign up page.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('steel-works.sign-up');
    }

    /**
     * Create User.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUser(Request $request)
    {
        User::updateOrCreate([
            'email' 	=> $request->email,
        ],[
            'name' 		=> $request->name,
            'password' 	=> md5($request->password),
        ]);

        return redirect()->route('login');
    }

    /**
     * Log Out User.
     *
     * @return \Illuminate\Http\Response
     */
    public function logOut()
    {
        Session::forget('user');

        return redirect()->route('index');
    }
}
