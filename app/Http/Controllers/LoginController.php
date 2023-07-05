<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Validation\Rules\RequiredIf;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->level == 'Admin') {
                if ($request->has('rememberme')) {
                    Cookie::queue('adminuser', $request->username,1440);
                    Cookie::queue('adminpwd', $request->password,1440);
                }
                return redirect()->intended('/AdminDashboard');
            }else if (auth()->user()->level == 'User') {
                if ($request->has('rememberme')) {
                    Cookie::queue('adminuser', $request->username,1440);
                    Cookie::queue('adminpwd', $request->password,1440);
                }
                return redirect()->intended('/dashboard');
            }else{
                return back()->with('loginError', 'Login gagal!');
            }
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    
}