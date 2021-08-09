<?php

namespace App\Http\Controllers;

class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }

    public function create()
    {
        return view('session-create');
    }

    public function store()
    {
        // validate user input
        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ]);

        //Validate the attempt
        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with('success', 'Welcome Back!');
        }

        return back()
            ->withInput()
            ->withErrors(['email' => 'Your provided credentials could not be verified']);
    }

}