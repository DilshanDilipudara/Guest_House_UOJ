<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function rooms()
    {
        return view('rooms');
    }

    public function services()
    {
        return view('services');
    }


    public function contact()
    {
        return view('contact');
    }

    public function profile()
    {
        return view('profile');
    }

    
    
}
