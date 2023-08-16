<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'     => 'required|email|',
            'password'  => 'required',
        ]);

        if (auth()->attempt($attributes)) {
            return redirect('/home')->with('success', 'Welcome back');
        }
        // return back()
        //     ->withInput()
        //     ->withErrors(['email' => 'Your credential could not be verified']);

        throw ValidationValidationException::withMessages(
            ['email' => 'Your credential could not be verified']
        );
    }

    public function destroy()
    {
        $loggedout = auth()->user()->name;
        auth()->logout();
        return redirect('/')->with('success', "See you again {$loggedout}");
    }
}
