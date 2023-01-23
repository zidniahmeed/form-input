<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function register_action(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email:rfc,dns',
            'password' => 'required|size:6',
            'role' => 'required',
            'password_confirm' => 'required|same:password'
        ]);
        $data = new User;
        $data->name = $request->name;
        $data->password = Hash::make($request->password);
        $data->email = $request->email;
        $data->role = $request->role;

        $data->save();

        return redirect()->route('login')->with('sukses', 'akun berhasil dibuat');
    }

    public function login_action(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        
        if (Auth::attempt(
        [
            'email' => $request->email, 
            'password' => $request->password, 
            'role' => $request->role  
        ]
        
        )) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'wrong password'
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
