<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register',[
            'title' => 'Register'
        ]);
    }
    public function store(Request $request)
    {
        // dd($request);
        if ($request['password'] != $request['password2']) {
            return redirect('/register')->with('error', 'Registration Fail!');
        }
        
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255|unique:users',
            'password' => 'required',
            'email' => 'required|email:dns,dns|unique:users'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/login')->with('success', 'Registration Success! Please Login.');
    }

}
