<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('users.signup');
    }

    public function store(Request $request)
    {   
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required','email','unique:users,email'],
            'contact' => ['required','unique:users,contact','digits:10'],
            'password'=> 'required|confirmed|min:6',
            'password_confirmation'=> 'required|min:6',
        ]);
        // dd($formFields);
        User::create($formFields);

        return redirect('/')->with('message', 'Singup Successful.You can now log in');
        
    }

    public function login()
    {
        return view('users.login');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required','email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields))
        {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in');
        }
        return back()->withErrors(['email'=> 'Invalid Credentials'])->onlyInput('email');
    }

     public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logout');
    }

}
