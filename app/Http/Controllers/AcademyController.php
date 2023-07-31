<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Academy;

class AcademyController extends Controller
{
    public function index(){
        $search = request('search');

        if($search) {
            $academies = Academy::where([
                ['name', 'like', '%'.$search.'%']
            ])->paginate(10);
        }else {

            $academies = Academy::paginate(10);
        }

        return view('home', ['academies' => $academies, 'search' => $search]);
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

        return redirect('home') -> with('msg', 'Academia criada com sucesso!');

    }

    public function edit($id)
    {
        $academie = Academy::findOrFail($id);
        return view('academies.edit', ['academie' => $academie]);
    }

    public function update(Request $request)
    {
        $academie = Academy::findOrFail($request -> id)->update($request ->all());
        return redirect('home') -> with('msg', 'item editado com sucesso!');
    }

    public function destroy($id){
        Academy::findOrFail($id)->delete();

        return redirect('home') -> with('msg', 'item deletado com sucesso!');

    }
}
