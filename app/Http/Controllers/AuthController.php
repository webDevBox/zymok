<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials))
        {
            if(auth()->user()->role == 1)
                return redirect('/dashboard');
            return redirect()->back()->withError('Wrong Data');
        }
        return redirect()->back()->withError('Wrong Credentials');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin');
    }
}
