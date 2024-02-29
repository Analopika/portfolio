<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('login');
    }

    public function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect(route('home'))->with("success", "Login successful");
        }
        return redirect(route('login'))->with("error", "Login details are incorrect");
    }

    public function register(){
        if(Auth::check()){
            return redirect(route('home'));
        }

        return view('register');
    }

    public function registerPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        //$data = $request->only('name','email', 'password');

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);


        if(!$user){
            return redirect(route('registration'))->with("error", "Registration failed try again");
        }
        return redirect(route('login'))->with("success", "Registration succesful");
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
