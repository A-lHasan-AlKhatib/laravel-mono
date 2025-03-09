<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(Request $request)
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // validate
        $attributes = $request->validate(['email' => 'required|email', 'password' => 'required']);
        // attempt to log in
        if(! Auth::attempt($attributes)){
            throw ValidationException::withMessages(['email' => 'The provided credentials are incorrect.']);
        }
        // regen session token
        $request->session()->regenerate();
        // redirect
        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
