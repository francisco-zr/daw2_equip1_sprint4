<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    // retorna la vista
    public function index()
    {
        return view('auth.login');
    }
    public function rememberPassword()
    {
        return view('auth.lost_password');
    }
    public function activateUser()
    {
        return view('auth.activate_user');
    }
    // hacer login
    public function login(Request $request)
    {
        $request->validate([
            'cf-turnstile-response' => ['required', Rule::turnstile()],
        ]);

        $validated = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'Email o contraseña incorrecta',
        ])->onlyInput('email');
    }
}
