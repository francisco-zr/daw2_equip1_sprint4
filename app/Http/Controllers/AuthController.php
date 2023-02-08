<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    // retorna la vista login
    public function index()
    {
        return view('auth.login');
    }
    // retorna la vista recordar password
    public function rememberPassword()
    {
        return view('auth.lost_password');
    }
    // envía un link para recuperar password
    public function rememberSend(Request $request): RedirectResponse
    {
        $request->validate(['email' => 'required|email']);
        $request->validate([
            'cf-turnstile-response' => ['required', Rule::turnstile()],
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
            dd($status);
    }
    // retornar la vista actualizar contraseña
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
