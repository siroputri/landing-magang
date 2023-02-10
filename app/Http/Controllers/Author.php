<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Author extends Controller
{
    public function register(Request $request)
    {
        // dd($request);

        $data = [
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password)
        ];

        $user = User::create($data);

        return redirect('/login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
// cek ulang
        if (!auth()->attempt($data)) {
            return response(['error_message' => 'Incorrect Details. 
            Please try again']);
        }

        $token = auth()->user()->createToken('API Token')->accessToken;

        return response(['user' => auth()->user(), 'token' => $token]);
    }
    public function index()
    {
        return view('user');
    }
}
