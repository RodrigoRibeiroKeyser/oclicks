<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'login' => ['required', 'min:8'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return Redirect::route('DashboardHome');
        }
 
        return back()->withErrors([
            'user' => 'Usuário ou senha incorretos!',
        ])->onlyInput('user');
    }
    public function destroy(){
        Auth::logout();

        Redirect('index');
    }
}