<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show register / create form
    public function create()
    {
        return view('users.register');
    }

    //Create New User Storage
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        //create user
        $user = User::create($formFields);

        //login user
        auth()->login($user);

        return redirect('/')->with('message', 'User created successfully and logged in ');
    }

    //Show register / create form
    public function login()
    {
        return view('users.login');
    }
}
