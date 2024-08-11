<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserdoRequest;
use App\Http\Requests\UserSaveRequest;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController
{
    public function login(){
        return view('login');
    }
    public function signup(){
        return view('signupform');
    }
        public function save(UserSaveRequest $request){
            $user = $request->validated();
            $user = [
                'name' => request('name'),
               'password' => Hash::make($request->password), // Hash the password
                'email' => request('email'),
            ];
            $user = user::create($user);
            return redirect()->route('login')->with('success', 'Your registration was successful. You can now log in using your credentials.');
    }
    public function dologin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('pastel')->with('success', 'Login successful.');
        } else {
            return redirect()->route('login')->with('error', 'Login is invalid, please check your credentials.');
        }
    }
 public function logout(){
     auth()->logout();
     return redirect()->route('login');

 }
}
