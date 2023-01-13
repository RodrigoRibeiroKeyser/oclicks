<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class loginController extends Controller
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
       
        if (
            
            Auth::attempt([
                'login' => $request->login, 
                'password' => $request->password])                  
                )  {
            return 
            Redirect::route('DashboardHome');
        } 
        

        return back()->withErrors([
            'user' => 'Usuário ou senha incorretos!',
        ])->onlyInput('user');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Redirect('index');
    }
}
