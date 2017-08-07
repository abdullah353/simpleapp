<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Dashboard view, for logged in users.
     *
     * @return view
     */
    public function index()
    {
        if (Auth::check()) 
            return view('dashboard');

        return redirect('login');
    }
}
