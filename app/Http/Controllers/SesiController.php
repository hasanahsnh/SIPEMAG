<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index() {
        return view('auth.login');
    }

    function login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username harus diisi',
            'password.required' => 'Password harus diisi'
        ]);

        $infologin = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)) {
            return redirect('administrator');
        } else {
            return redirect('')->withErrors('Username atau password salah')->withInput();
        }
    }
}
