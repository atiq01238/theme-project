<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    //
    public function register(Request $request)
    {
        // return view("auth.register");
        $validated = $request->validate([
        'name' => 'required|string|max:25',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|min:6|confirmed',
        ]);
        // dd($validated);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
        return redirect('/auth/login');
    }

    public function index(Request $request)
    {
        $users = User::all();
        // dd($users);
        return view('/users.users', compact('users'));
    }

}
