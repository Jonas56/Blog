<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class AuthenticationController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'max:255', 'min:8'],
            // 'conf-pass' => ['required', 'max:255', 'min:8'],
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return (redirect('/'))->with('success', 'Your account has been registred!');
    }
}