<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Author extends Controller
{
    public function register(Request $request)
    {
        $data = [
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password)
        ];

        $user = User::create($data);

        return redirect('/register');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
        // cek ulang
        if (!Auth::attempt($data)) {
            return redirect("/login");
        }

        return redirect('/');
    }

    public function index()
    {
        return view('user');
    }

    public function loginPage()
    {
        return view('login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }
}
