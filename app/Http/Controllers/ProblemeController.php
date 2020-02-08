<?php

namespace App\Http\Controllers;

use App\Probleme;

class ProblemeController extends Controller
{
    public function index()
    {
        return view('problemes.index', compact(Probleme::all()));
    }

    public function create() {
        return view('problemes.create');
    }

    public function store()
    {
        $data = request()->validate([
            'nom' => 'required',
            'description' => '',
            'equipement' => 'required',
            'media' => ''
        ]);

        dd($data);

        Probleme::create($data);

        return view('problemes.index');
    }

    public function show(Probleme $probleme)
    {
        return view('problemes.show', compact('probleme'));
    }

    public function edit(Probleme $probleme)
    {
        return view('problemes.edit', compact('probleme'));
    }

    public function update(Probleme $probleme)
    {
        $data = request()->$this->validate([
            'nom' => 'required',
            'description' => '',
            'equipement' => 'required',
            'media' => ''
        ]);

        dd($data);

        $probleme->update($data);

        return redirect()->route('problemes.show', $probleme);
    }

    public function destroy(Batiment $batiment)
    {
        $batiment->delete();

        return redirect()->route('problemes.index');
    }
}
