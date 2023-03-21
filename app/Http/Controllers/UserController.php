<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Registration form
    public function create(){
        return view('users.create');
    }

    // Create user
    public function store(Request $request){
        $formFields = $request->validate([
            "name" => ["required", "min:3"],
            "email"=> ["required", "email", Rule::unique('users')],
            "password"=> "required|confirmed|min:6"
        ]);

        // Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        // login
        auth()->login($user);
        return redirect('/')->with('message', 'User created and logged in successfully');
    }
    // Logout
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }

    public function login(){
        return view('users.login');
    }

    public function auth(Request $request){
        $formFields = $request->validate([
            "email"=> ["required", "email"],
            "password"=> "required"
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are logged in!');
        } 
        
        return back()->withErrors(['email' => 'Invalid credentials']);

    }
}
