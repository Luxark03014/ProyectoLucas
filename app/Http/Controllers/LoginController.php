<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login'); 
    }

    public function login(Request $request)
    {
       
        $request->validate([
            'email' => 'required|string|email|max:125',
            'password' => 'required|string|min:1', 
        ]);

        $credentials = $request->only('email', 'password');

        
        if (Auth::attempt($credentials)) {
            
            return redirect("/home"); 
        }

        
        return redirect()->back()->withErrors([
            'email' => 'Las credenciales proporcionadas son incorrectas.',
        ])->withInput($request->only('email'));
    }
}



?>