<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('admin.home');
        }

        return view('Admin.login');
    }

    public function showClientForm()
    {
        if (Auth::check()) {
            return redirect()->route('admin.home');
        }

        return view('Admin.login');
    }

    public function resetpassword()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('reset-password');
    }


    public function authenticate(Request $request)
    {


        $credentials = $request->validate([
            'email_check' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $emailColumn = 'email';

        if (Auth::attempt([$emailColumn => $credentials['email_check'], 'password' => $credentials['password']])) {
            $user = Auth::user();
            $user->save();

            $request->session()->regenerate();





                return redirect()->route('admin.home');

        }

        return redirect()->route('login')->with('error', 'The provided credentials do not match our records or the user is not active.');

        return back()->withErrors([
            'email_check' => 'The provided credentials do not match our records or the user is not active.',
        ]);
    }



    public function logout()
    {
        Auth::logout();

        // Redirect the user to the login page.
        return redirect()->route('login');
    }
}
