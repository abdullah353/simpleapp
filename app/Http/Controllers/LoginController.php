<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        var_dump($request->input('email'));
        var_dump($request->input('password'));
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')])) {

            echo "Successfully signed in ";
        }
        echo "Unable ToSign in";
    }

    /**
     * Singin the user.
     *
     * @return Response
     */
    public function Login()
    {
        echo "Login requeset";
    }

    /**
     * Show the profile for the given user.
     *
     * @piaram  int  $id
     * @return Response
     */
    public function Logout()
    {
        echo "Logout Session";
    }
}
