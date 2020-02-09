<?php

namespace App\Http\Controllers;

use App\Equipement;
use App\Produit;
use Illuminate\Database\QueryException;

class EquipementController extends Controller
{
    public function index()
    {
        return view('equipements.index', [
            "equipements" => Equipement::all()
        ]);
    }

    public function list()
    {
        $equipements = Equipement::all();
        $returnArray = [];


        foreach ($equipements as $equipement)
        {
            $arrayFormat = [
                "equipement" => $equipement,
                "produit" => $equipement->produit(),
                "installation" => $equipement->installation()
            ];
            array_push($returnArray, $arrayFormat);
        }

        return view('equipement.list', [
            "equipements" => $returnArray
        ]);
    }

    public function create()
    {
        $batiments = auth()->user()->batiments();

        foreach ($batiments as $batiment)
        {
            array_push($installations, $batiment);
        }

        return view('equipements.create', [
            "installations" => $installations,
            "produits" => Produit::all()
        ]);
    }

    public function store()
    {
        if(!request()->has("ajax")) return view('equipements.index');

        $data = request()->validate([
            'produit_id' => 'required',
            'installation_id' => 'required',
            'date_installation' => '',
            'orientation' => '',
            'geolocalisation' => '',
            'elevation' => '',
            'inclinaison' => ''
        ]);

        $inserted = null;

        try {
            $inserted = Equipement::create($data);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return json_encode([
                    "message" => $e->getMessage(),
                    "table" => "batteries",
                    "data" => $inserted
                ]);
            }
        }

        return response()->json([
            "success" => true,
            "table" => "equipements",
            "data" => $inserted
        ], 200);
    }

    public function show(Equipement $equipement)
    {
        return view('equipements.show', [
            'equipement' => $equipement
        ]);
    }

    public function edit(Equipement $equipement)
    {
        return view('equipements.edit', [
            'equipement' => $equipement
        ]);
    }

    public function update(Equipement $equipement)
    {
        $data = request()->$this->validate([
            'produit_id' => 'required',
            'installation_id' => 'required',
            'date_installation' => '',
            'orientation' => '',
            'geolocalisation' => '',
            'elevation' => '',
            'inclinaison' => ''
        ]);

        $updated = false;

        try {
            $updated = $equipement->update($data);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return json_encode([
                    "message" => $e->getMessage(),
                    "table" => "equipements",
                    "data" => $updated
                ]);
            }
        }

        return response()->json([
            "success" => $updated,
            "table" => "equipements",
            "data" => $updated
        ], 200);
    }

    public function destroy(Equipement $equipement)
    {
        $equipement->delete();

        return redirect()->route('equipements.index');
    }
}
