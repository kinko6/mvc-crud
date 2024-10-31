<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function index()
    {
        $disciplines = Discipline::all();
        return view('disciplines.index', compact('disciplines'));
    }

    public function create()
    {
        return view('disciplines.create');
    }

    public function store(Request $request)
    {
        Discipline::create($request->all());
        return redirect()->route('disciplines.index');
    }

    public function edit($id)
    {
        $discipline = Discipline::findOrFail($id);
        return view('disciplines.edit', compact('discipline'));
    }

    public function update(Request $request, $id)
    {
        $discipline = Discipline::findOrFail($id);
        $discipline->update($request->all());
        return redirect()->route('disciplines.index');
    }

    public function destroy($id)
    {
        $discipline = Discipline::findOrFail($id);
        $discipline->delete();
        return redirect()->route('disciplines.index');
    }
}
