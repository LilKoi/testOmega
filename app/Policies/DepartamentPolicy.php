<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DepartamentPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
    }

    public function update()
    {
        return Auth::user()->role_id != 3;
    }

    public function delete()
    {
        return Auth::user()->role_id != 3 or Auth::user()->role_id != 2;
    }
}
