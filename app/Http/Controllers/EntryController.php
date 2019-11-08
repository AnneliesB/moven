<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function login()
    {
        return view('entry/login');
    }

    public function signup()
    {
        return view('entry/signup');
    }

    public function handleLogin(Request $request)
    {
        $credentials = $request->only(['username', 'password']);
        if (\Auth::attempt($credentials)) {
            $user = $this->getUserFromUsername($credentials['username']);
            session(['id' => $user->id, 'username' => $user->username]);

            return redirect('/');
        } else {
            $data['error'] = 'Er is iets fout gegaan. Probeer opnieuw.';
            $data['username'] = $credentials['username'];

            return view('entry/error', $data);
        }
    }

    public function handleSignup(Request $request)
    {
        $credentials = $request->only(['username', 'password']);
        $user = new \App\User();
        $user->username = $credentials['username'];
        $user->password = \Hash::make($credentials['password']);
        $user->save();

        return redirect('/');
    }

    public function getUserFromUsername($username)
    {
        $user = \DB::table('users')->where('username', $username)->first();

        return $user;
    }
}
