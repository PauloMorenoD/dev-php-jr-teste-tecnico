<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = "Paulo";
        return view('login', ['name' => $name]);
    }
    public function register()
    {
        return view('register');
    }
}
