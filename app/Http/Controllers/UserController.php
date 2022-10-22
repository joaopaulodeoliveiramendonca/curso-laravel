<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('user', [
            'name' => 'jhon Snow',
            'teste' => $user
        ]);
    }

    public function index()
    {
        return view('users', [
            'users' => User::all(),
        ]);
    }
}
