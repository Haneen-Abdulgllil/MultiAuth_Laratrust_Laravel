<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        if(auth::user()->hasRole('user'))
        {
            return view('userdash');
        }
        elseif(auth::user()->hasRole('blogwriter'))
        {
            return view('blogwriter_dash');
        }
        elseif(auth::user()->hasRole('admin'))
        {
            return view('dashboard');
        }

    }
}
