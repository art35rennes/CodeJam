<?php

namespace App\Http\Controllers;

use App\Batterie;
use App\Equipement;
use App\Panneau;
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
                "produit" => $equipement->produit,
                "installation" => $equipement->installation
            ];
            array_push($returnArray, $arrayFormat);
        }

        return view('equipements.index', [
            "equipements" => $returnArray
        ]);
    }

    public function create()
    {
        $batiments = auth()->user()->batiments;

        for ($i=0 ; $i < count($batiments) ; $i++)
        {
            $batiments[$i]["installations"] = $batiments[$i]->installations;
        }

        return view('equipements.create', [
            "batiments" => $batiments,
            "produits" => Produit::all()
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'installation_id' => "required",
            'produit_id' => 'required',
            'equipement' => '',
            "date_installation" => '',
            "geolocalisation" => '',
            "orientation" => '',
            "elevation" => '',
           "inclinaison" => '',
           "marque" => '',
           "reference" => '',
           "largeur" => '',
           "longueur" => '',
           "hauteur" => '',
           "poids" => '',
           "rendement" => '',
           "puissance_nominale" => '',
           "tension_nominale" => '',
           "tension_maximale" => '',
           "courant_maximal" => '',
           "tension_circuit_ouvert" => '',
           "courant_court_circuit" => '',
           "tension_stockage" => '',
           "capacite_stockage" => '',
            "type" => '',
        ]);

        if(request()->request->has("equipement"))
        {
            $produitData = [
                "marque" => $data["marque"],
                "reference" => $data["reference"],
                "largeur" => $data["largeur"],
                "longueur" => $data["longueur"],
                "hauteur" => $data["hauteur"],
                "poids" => $data["poids"],
                "rendement" => $data["rendement"],
                "equipement" => $data["equipement"]
            ];

            if($data["equipement"] == -1)
            {
                $produitData["equipement"] = null;
            }
        }

        $equipementData = [
            "installation_id" => $data["installation_id"],
            "date_installation" => $data["date_installation"],
            "geolocalisation" => $data["geolocalisation"],
            "orientation" => $data["orientation"],
            "elevation" => $data["elevation"],
            "inclinaison" => $data["inclinaison"],
        ];

        $newProduit = ($data["produit_id"] == -1 ? true : false);

        if($newProduit) {
            switch ($data["equipement"]) {
                case "panneau":
                    $panneauData = [
                        "puissance_nominale" => $data["puissance_nominale"],
                        "tension_nominale" => $data["tension_nominale"],
                        "tension_maximale" => $data["tension_maximale"],
                        "courant_maximal" => $data["courant_maximal"],
                        "tension_circuit_ouvert" => $data["tension_circuit_ouvert"],
                        "courant_court_circuit" => $data["courant_court_circuit"]
                    ];

                    $panneau = Panneau::create($panneauData);
                    $produitData["type"] = "panneau";
                    $produitData["type_id"] = $panneau->id;
                    $produit = Produit::create($produitData);
                    break;

                case "batterie":
                    $batterieData = [
                        "tension_stockage" => $data["tension_stockage"],
                        "capacite_stockage" => $data["capacite_stockage"],
                        "type" => $data["type"]
                    ];

                    $batterie = Batterie::create($batterieData);
                    $produitData["type"] = "batterie";
                    $produitData["type_id"] = $batterie->id;
                    $produit = Produit::create($produitData);
                    break;
            }
            $equipementData["produit_id"] = $produit->id;
        } else
        {
            $equipementData["produit_id"] = $data["produit_id"];
        }

        $inserted = null;
        try {
            $inserted = Equipement::create($equipementData);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return json_encode([
                    "message" => $e->getMessage(),
                    "table" => "equipements",
                    "data" => $inserted
                ]);
            }
        }

        if (!request()->request->has("ajax"))
        {
            return redirect()->route('equipements.list');
        } else
        {
            return response()->json([
                "success" => true,
                "table" => "equipements",
                "data" => $inserted
            ], 200);
        }

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

        return redirect()->route('home');
    }
}
