<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function register(){
        return view('register');
    }


    function getAuthUser(){
        dd(auth()->user());
    }
    // register new user to db
    function saveUser(Request $request){
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8'],
        ]);

        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password =  Hash::make($request->get('password'));
        $user->save();

        return redirect('/login')->with('success', 'Registration successful! Please login.');

    }
    function login(){
        return view('login');
    }

    function auth(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($request->only('email','password'))){
            $request->session()->regenerate();
            return redirect('/student/list')->with('success', 'Login successful!');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials')->withInput();
        }
    }
}
