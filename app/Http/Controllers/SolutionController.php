<?php

namespace App\Http\Controllers;

use App\Probleme;
use App\Solution;

class SolutionController extends Controller
{
    public function index()
    {
        return view('solutions.index', [
            "solutions" => Solution::all()
        ]);
    }

    public function create() {
        return view('solutions.create');
    }

    public function store(Probleme $probleme)
    {
        if(!request()->has("ajax")) return view('solutions.index');

        $data = request()->validate([
            'nom' => 'required',
            'description' => '',
            'media' => ''
        ]);

        $probleme->solutions()->create($data);

        return view('solutions.index');
    }

    public function show(Probleme $probleme, Solution $solution)
    {
        return view('solutions.show', [
            'probleme' => $probleme,
            'solution' => $solution
        ]);
    }

    public function edit(Probleme $probleme, Solution $solution)
    {
        return view('solutions.edit', [
            'probleme' => $probleme,
            'solution' => $solution
        ]);
    }

    public function update(Probleme $probleme, Solution $solution)
    {
        $data = request()->$this->validate([
            'nom' => 'required',
            'description' => '',
            'media' => ''
        ]);

        $solution->update($data);

        return redirect()->route('solutions.show', $solution);
    }

    public function destroy(Solution $solution)
    {
        $solution->delete();

        return redirect()->route('solutions.index');
    }
}
