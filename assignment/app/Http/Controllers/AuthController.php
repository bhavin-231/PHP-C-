<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\session;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }


    public function valid_register(Request $request){
        $request->validate([

            'name'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:3'
        ]);
        $data = $request->all();

        User::create([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password'])
        ]);
            return redirect('login');
    }



    public function login(){
        return view('auth.login');
    }

    Public function valid_login(Request $request){
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);
        $credentials = $request->only('email', 'password');

        // dd(Auth::attempt($credentials));

        if(Auth::attempt($credentials))
        {
            return redirect('dashboard');
        } else
        {
            return redirect('auth.login');
        }


    }
    public function logout() {
        session::flush();
        Auth::logout();
        return redirect('signin');
      }
}
