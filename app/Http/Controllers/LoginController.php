<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    //

    public function Slogin(){
        return view('login');
    }


    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        $credentials = $request->only( 'email','password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('accueil');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function Slogout()
    {
        return view('logout');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/logout');
    }

    public function register(){
        return view('register');
    }


    public function signup(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',

        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->pwd),
        ]);

        return redirect('/accueil')->with('success', 'Votre compte a été créé avec succès. Vous pouvez maintenant vous connecter.');
    }


}
