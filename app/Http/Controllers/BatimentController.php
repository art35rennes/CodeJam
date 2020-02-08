<?php

namespace App\Http\Controllers;

use App\Batiment;

class BatimentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('batiments.index', [
            "batiments" => Batiment::find(auth()->user()),
        ]);
    }

    public function create() {
        return view('batiments.create');
    }

    public function store()
    {
        $data = request()->validate([
            'nom' => 'required',
            'description' => '',
            'geolocalisation' => ''
        ]);

        dd($data);

        auth()->user()->batiments()->create($data);

        return view('batiments.index');
    }

    public function show(Batiment $batiment)
    {
        return view('batiments.show', compact('batiment'));
    }

    public function edit(Batiment $batiment)
    {
        return view('batiments.edit', compact('batiment'));
    }

    public function update(Batiment $batiment)
    {
        $data = request()->$this->validate([
            'nom' => 'required',
            'description' => '',
            'geolocalisation' => ''
        ]);

        dd($data);

        $batiment->update($data);

        return redirect("/batiments/{$batiment->id}");
    }

    public function destroy(Batiment $batiment)
    {
        $batiment->delete();

        return redirect()->route('batiments.index');
    }
}
