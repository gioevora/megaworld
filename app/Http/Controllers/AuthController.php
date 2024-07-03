<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;

class AuthController extends Controller
{
    public function login() {
        Auth::logout();
        return view('auth.login');
    }



    public function authentication(Request $request) {
        $user = User::where('email', $request->email)->first();
        
        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);
            
            return redirect('/admin');
        };
    }

    public function signup() {
        return view('auth.signup');
    }

    public function register(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8'
        ]);

        $user = new User;
        $user->name =  $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login');
    }   

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/auth');
    }
}