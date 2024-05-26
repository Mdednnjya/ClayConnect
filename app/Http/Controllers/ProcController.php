<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcController extends Controller
{
    public function regist()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }
}
