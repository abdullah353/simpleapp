<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function Login($id)
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
