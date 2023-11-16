<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthenticateController extends Controller
{
    public function registerUser(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return response()->json(['message' => 'Usuário registrado com sucesso.']);
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/area-logada');
        }

        return back()->withErrors(['email' => 'Credenciais inválidas']);
    }

    public function logoutUser()
    {
        Auth::logout();
        return redirect('/login');
    }
}
