<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showSignupForm()
    {
        return view('auth.signup', ['pageTitle' => 'Signup Page']);
    }
    public function Signup(SignupRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        Auth::login($user); // تسجيل دخول المستخدم مباشرة بعد التسجيل
        return redirect('/')->with('success', 'Account created successfully!');
    }

    public function showLoginForm()
    {
        return view('auth.login', ["pageTitle" => "Login Page"]);
    }
    public function Login(loginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors([
            'email' => 'the provided credentials do nit match our records',

        ])->withInput();
    }

    public function Logout()
    {
        auth()->logout();
        return redirect('/');
    }

}
