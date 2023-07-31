<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function auth(Request $request){
        echo $request;
        return redirect('home');
    }

    public function register()
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        return redirect('/')->with('msg', 'Usuário criado com sucesso');
    }
}
