<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
        return view('models.index', [
            "models" => Model::all()
        ]);
    }

    public function create() {
        return view('models.create');
    }

    public function store()
    {
        $data = request()->validate([
            'marque' => 'required',
            'reference' => 'required',
            'equipement' => 'required',
            'largeur' => '',
            'hauteur' => '',
            'profondeur' => '',
            'poids' => '',
            'rendement' => '',
            'equipement' => 'required',
            'certifie' => 'boolean'
        ]);

        dd($data);

        $inserted = Model::create($data);

        return view('models.index');
    }

    public function show(Probleme $probleme)
    {
        return view('problemes.show', [
            'probleme' => $probleme
        ]);
    }

    public function edit(Probleme $probleme)
    {
        return view('problemes.edit', [
            'probleme' => $probleme
        ]);
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
