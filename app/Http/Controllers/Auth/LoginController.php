<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
{

    $credentials = $request->only('email', 'password');


    if (Auth::attempt($credentials)) {

        $request->session()->regenerate();

        if (Auth::user()->role === 'admin') {

            return redirect()->intended('/admin');
        } else {

            return redirect()->intended('/');
        }
    }


    return back()->withErrors(['email' => 'Invalid credentials']);
}


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
