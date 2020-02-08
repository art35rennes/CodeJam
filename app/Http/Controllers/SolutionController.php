<?php

namespace App\Http\Controllers;

use App\Probleme;
use App\Solution;

class SolutionController extends Controller
{
    public function index()
    {
        return view('solutions.index', compact(Solution::all()));
    }

    public function create() {
        return view('solutions.create');
    }

    public function store(Probleme $probleme)
    {
        $data = request()->validate([
            'nom' => 'required',
            'description' => '',
            'media' => ''
        ]);

        dd($data);

        $probleme->solutions()->create($data);

        return view('solutions.index');
    }

    public function show(Probleme $probleme, Solution $solution)
    {
        return view('solutions.show', compact(['probleme', 'solution']));
    }

    public function edit(Probleme $probleme, Solution $solution)
    {
        return view('solutions.edit', compact(['probleme', 'solution']));
    }

    public function update(Probleme $probleme, Solution $solution)
    {
        $data = request()->$this->validate([
            'nom' => 'required',
            'description' => '',
            'media' => ''
        ]);

        dd($data);

        $solution->update($data);

        return redirect()->route('solutions.show', $solution);
    }

    public function destroy(Solution $solution)
    {
        $solution->delete();

        return redirect()->route('solutions.index');
    }
}