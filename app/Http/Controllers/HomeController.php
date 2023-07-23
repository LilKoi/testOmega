<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $users = User::query()->get();
        return view('panel', ['users' => $users]);
    }
}
