<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\UpdateUserRequest;
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
        $data = $request->validated();
        $user = User::create([
            'name' =>   $data->name,
            'email' =>  $data->email,
            'password' => Hash::make($data->password)
        ]);
        return redirect('/login');
    }

    public function login(LoginUserRequest $request)
    {
        $data = $request->validated();
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect('/panel');
        } else {
            return back()->withErrors([
                'errors' => 'Что-то пошло не так',
            ]);
        }
    }

    public function update(User $user, UpdateUserRequest $request)
    {
        $data = $request->validated();
        $user->update($data);
        return redirect('/panel');
    }
}
