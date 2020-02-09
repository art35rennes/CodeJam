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

        if(auth()->user()->batiments()->create($data)) {
            return response()->json([
                "success" => true
            ], 200);
        } else {
            return response()->json([
                "success" => true
            ], 500);
        }
    }

    public function show(Batiment $batiment)
    {
        return view('batiments.show', [
            'batiment' => $batiment
        ]);
    }

    public function edit(Batiment $batiment)
    {
        return view('batiments.edit', [
            'batiment' => $batiment
        ]);
    }

    public function update(Batiment $batiment)
    {
        $data = request()->$this->validate([
            'nom' => 'required',
            'description' => '',
            'geolocalisation' => ''
        ]);

        $batiment->update($data);

        return redirect("/batiments/{$batiment->id}");
    }

    public function destroy(Batiment $batiment)
    {
        $batiment->delete();

        return redirect()->route('batiments.index');
    }
}
