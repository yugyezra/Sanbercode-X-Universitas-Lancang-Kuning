<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function register()
    {
        return view('page.register');
    }

    public function send(Request $request)
    {
        $firstName = $request->input('fname');
        $lastName = $request->input('lname');

        return view('page.welcome', ['firstName' => $firstName, 'lastName' => $lastName]);
    }
}
    
