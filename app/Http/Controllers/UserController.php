<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Departament;
use App\Models\Position;
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

    public function loginPage()
    {
        return view('login');
    }

    public function login(LoginUserRequest $request)
    {
        $data = $request->validated();
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect('/');
        } else {
            return back()->withErrors([
                'errors' => 'Что-то пошло не так',
            ]);
        }
    }

    public function edit(User $user)
    {
        return view('users.update', [
            'user' => $user,
            'positions' => Position::get(),
            'departaments' => Departament::get()
        ]);
    }

    public function update(User $user, UpdateUserRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $data['avatar'] = $avatarPath;
        }
        if (isset($data["password"])) {
            $data["password"] = Hash::make($data['password']);
        }
        if(isset($data["departaments"])) {
            $user->departments()->sync($data["departaments"]);
        }
        $user->update($data);
        return redirect(route('home'));
    }
}
