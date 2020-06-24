<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        //ganti dengan landingUser untuk melihat views dari landing user
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function landingUser()
    {
        return view('landingUser');
    }

    public function portofolio()
    {
        return view('portofolio');
    }
}
