<?php

namespace App\Http\Controllers;

use App\Batiment;
use App\Produit;
use Illuminate\Support\Facades\DB;

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
        $data = request()->validate([
            'nom' => 'required',
            'description' => '',
            'geolocalisation' => '',
            'ville' => 'required'
        ]);

        $inserted = auth()->user()->batiments()->create($data);

        if(!request()->request->has("ajax")) {
            return redirect()->back();
        } else
        {
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
    }

    public function show(Batiment $batiment)
    {
        $installations = $batiment->installations;

        foreach ($installations as $installation)
        {
            $equipements = $installation->equipements;

            foreach ($equipements as $equipement)
            {
                $produit = $equipement->produit;
                $equipement["produit"] =  $produit;

                switch ($produit->equipement)
                {
                    case "panneau":
                        $equipement["panneau"] = $produit->panneau($produit["type_id"]);
                        break;
                    case "batterie":
                        $equipement["batterie"] = $produit->batterie($produit["type_id"]);
                        break;
                }
                //$equipement["logs"] = $equipement->logs();
            }

            $installation["equipements"] = $equipements;
        }

        $returnArray["batiment"] = $batiment;
        $returnArray["installations"] = $installations;

        //dd($returnArray);

        return view('batiments.show', [
            'batiments' => $returnArray
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
