<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showSignInForm()
    {
        return view('signin');
    }

    public function handleSignIn(Request $request)
    {
        // Add sign-in logic here
    }
}
