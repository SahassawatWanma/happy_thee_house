<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $role = Auth()->user()->role;

            if($role == '0')
            {
                return view('dashboard');

            }
        }
    }
}
