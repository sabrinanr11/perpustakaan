<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
Use Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $credentials = $request->only(['email'=>$email, 'password'=>$request->$password]);
        $user = User::where('email', $email)->first();
        if ($user) {
            Alert::warning('Oops', 'Warning Message');
            return redirect()->back()->withErrors('Login Failed. Please check your email and password');
        }


        //password verufy

        if (password_verify($request->password, $user->password)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->withErrors('Login Failed. Please check your email and password');
        }
    }
}
