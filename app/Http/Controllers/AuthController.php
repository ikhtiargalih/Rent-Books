<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;

class AuthController extends Controller
{
    public function register()
    {
        return view('Auth.register');
    }
    
    public function login()
    {
        return view('Auth.login');
    }

    public function registerAccount(Request $request)
    {
        
        $credentials = $request->validate([   
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        User::create($credentials);
        return redirect('/')->with('success', 'Berhasil membuat akun');
    }

    public function auth(Request $request)
    {
        $login = $request->validate([
        'email' => 'required|exists:users,email',
        'password' => 'required'    
        ],[
            'email.exists' => 'Email ini belum tersedia',
            'email' => 'Email harus diisi', 
            'password' => 'Password harus diisi'        
        ]);
        if(Auth::attempt($login)){
            $request->session()->regenerate();
            if(Auth::user() && Auth::user()->role_id == 1){           
                return redirect('/dashboard/admin')->with('SuccesLogin', 'anda berhasil login');
        }
        return redirect()->intended('/dashboard/user');
    }

    }

}
