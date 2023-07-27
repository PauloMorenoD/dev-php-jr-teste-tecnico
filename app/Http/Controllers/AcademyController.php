<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Academy;

class AcademyController extends Controller
{
    public function index(){
        $academies = Academy::all();

        return view('home', ['academies' => $academies]);
    }
    public function create(){
        $academies = Academy::all();

        return view('academies.create', ['academies' => $academies]);
    }
    public function store(Request $request){
        $academy = new Academy;

        $academy -> name = $request -> name;
        $academy -> description = $request -> description;

        $academy -> save();

        return redirect('home') -> with('msg', 'Academia criada com sucesso');

    }
}
