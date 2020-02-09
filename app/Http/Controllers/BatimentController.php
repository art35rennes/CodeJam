<?php

namespace App\Http\Controllers;

use App\Batiment;
use App\Produit;

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
        return view('batiments.create', [
            "produits" => Produit::all(),
        ]);
    }

    public function store()
    {

        if(!request()->has("ajax")) return view('batiment.index');

        $data = request()->validate([
            'nom' => 'required',
            'description' => '',
            'geolocalisation' => '',
            'ville' => 'required'
        ]);

        $inserted = auth()->user()->batiments()->create($data);

        if($inserted) {
            return response()->json([
                "success" => true,
                "table" => "batiments",
                "data" =>$inserted
            ], 200);
        } else {
            return response()->json([
                "success" => false,
                "table" => "batiments",
                "data" => $inserted
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
            'geolocalisation' => '',
            'ville' => 'required'
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
