<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect()->route('login');

    }

    public function login(Request $request)
    {
        $credenciales = [
            "email" => $request ->email,
            "password" => $request ->password
        ];

        if(Auth::attempt($credenciales)){
            $request->session()->regenerate();
            return redirect()->intended(route('home'));

        }else{
            return redirect(route('login'));
        }

    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));

    }
}