<?php

namespace App\Http\Controllers;

use App\User;
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')])) {

            return redirect('/dashboard');
        }

        return Redirect::back()
            ->withInput()
            ->withErrors(['Wrong username/password combination.']);
    }

    /**
     * Show the registeration form to the client.
     * @return view Laravel view for generating register panel.
     */
    public function register()
    {
        return view('register');
    }


    /**
     * Show the login form to the client.
     * @return view Laravel view for generating login panel.
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Store new user in our databse.
     * @param  Request  $request
     */
    public function store(Request $request)
    {
        $newUser = $request->all();
        $user = new User();

        if(!$user->validate($newUser))
        {
            return view('register')->withErrors($user->errors());
        }

        $user->fill($newUser);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/dashboard');
    }

    /**
     * Logout current signed user.
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
