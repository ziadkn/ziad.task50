<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{
    public function viewLogin () {
        return view('pages.authentication.login');
    }

    public function viewRegister () {
        return view('pages.authentication.register');
    }

    public function login (Request $request) {
        $request->validate([
            'email' => 'email|required',
            'password' => 'string|required',
        ]);

        $credentials = request(['email', 'password']);

        if(!Auth::attempt($credentials))
        {
            Session::flash('message', 'Wrong username/password');
            Session::flash('alert-class', 'danger');
            return redirect('/authentication/login');
        }

        Session::flash('message', 'Logged in');
        Session::flash('alert-class', 'success');

        return redirect('/authentication/profile');
    }

    public function register (Request $request) {
        $request->validate([
            'email' => 'email|required',
            'password' => 'string|required',
            'name' => 'string|required',
        ]);

        User::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'name' => request('name'),
            'role' => 'MEMBER'
        ]);

        $credentials = request(['email', 'password']);

        Auth::attempt($credentials);

        return redirect('/authentication/profile');
    }
}
