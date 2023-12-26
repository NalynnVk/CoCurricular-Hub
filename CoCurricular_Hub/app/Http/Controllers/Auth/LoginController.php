<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Check credentials without logging in
        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'These credentials do not match our records.',
            ]);
        }

        // Check if the authenticated user has the correct role
        if (Auth::user()->role !== $request->role) {
            Auth::logout(); // Logout the user if the role doesn't match
            return back()->withErrors([
                'role' => 'The selected role does not match our records.',
            ]);
        }

        // Authentication successful, redirect to the intended path
        return redirect()->intended($this->redirectPath());
    }

    protected function credentials(Request $request)
    {
        return array_merge($request->only($this->username(), 'password'), ['role' => $request->role]);
    }
}
