<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{
    public function dashboard()
    {
        if(Auth::check() === true)
        {
            return redirect('/');
        }

        return view('login.dashboard');
    }

    public function selectLogin()
    {
        if(Auth::check() === false)
        {
            return view('login.login');
        } 
    }

    public function register()
    {
        if(Auth::check() === false)
        {
            return view('login.dashboard');
        } 
    }

    public function registerEmpresa()
    {
        return redirect('/empresas/criar');
    }

    public function registerUser()
    {
        return redirect('/clientes/novo');
    }

    public function authLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $user_data = $request->only('email', 'password');

        if(Auth::attempt($user_data))
        {
            return redirect('/');
        }
        else
        {
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
