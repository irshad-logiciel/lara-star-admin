<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function __construct()
    {
    	// 
    }

    public function login()
    {
    	return view('dashboard.auth.login');
    }

    public function authencticate(Request $request)
    {
    	// 
    }

    public function signUp(Request $request)
    {
        return view('dashboard.auth.register');
    }

    public function register(Request $request)
    {
        //
    }
}
