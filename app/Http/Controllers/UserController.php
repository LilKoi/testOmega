<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
    }

    public function register(RegisterUserRequest $request)
    {
        $user = User::create([
            'name' =>   $request->name,
            'email' =>  $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/login');
    }

    public function login(LoginUserRequest $request)
    {
        if (Auth::attempt($request->toArray())) {
            $request->session()->regenerate();
            return redirect('/panel');
        } else {
            return back()->withErrors([
                'errors' => 'Что-то пошло не так',
            ]);
        }
    }

    public function update(User $user, Request $request)
    {
        $user->update($request->toArray());
        return redirect('/panel');
    }
}
