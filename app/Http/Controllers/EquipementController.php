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
        if(!request()->has("ajax")) return view('equipements.index');

        $data = request()->validate([
            'installation_id' => "required",
            'produit_id' => 'required',
            'equipement' => 'required',
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
           "puissance_nominal" => '',
           "tension_nominal" => '',
           "tension_max" => '',
           "courant_max" => '',
           "tension_co" => '',
           "courant_cc" => '',
           "tension_stockage" => '',
           "capacite_stockage" => ''
        ]);

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

        $equipementData = [
            "installation_id" => $data["installation_id"],
            "date_installation" => $data["date_installation"],
            "geolocalisation" => $data["geolocalisation"],
            "orientation" => $data["orientation"],
            "elevation" => $data["elevation"],
            "inclinaison" => $data["inclinaison"],
        ];

        $newProduit = ($data["produit_id"] == -1 ? true : false);

        if($newProduit)
        {
            $produit = Produit::create($produitData);
            $equipementData["produit_id"] = $produit->id;
        } else
        {
            $equipementData["produit_id"] = $data["produit_id"];
        }

        switch ($data["equipement"])
        {
            case 1:
                $panneauData = [
                    "puissance_nominal" => $data["puissance_nominal"],
                    "tension_nominal" => $data["tension_nominal"],
                    "tension_max" => $data["tension_max"],
                    "courant_max" => $data["courant_max"],
                    "tension_co" => $data["tension_co"],
                    "courant_cc" => $data["courant_cc"]
                ];

                if($newProduit)
                {
                    $panneauData["produit_id"] = $produit->id;
                } else
                {
                    $panneauData["produit_id"] = $data["produit_id"];
                }

                Panneau::create($panneauData);
                break;

            case 2:
                $batterieData = [
                    "tension_stockage" => $data["tension_stockage"],
                    "capacite_stockage" => $data["capacite_stockage"],
                    "type" => $data["type"]
                ];

                if($newProduit)
                {
                    $batterieData["produit_id"] = $produit->id;

                } else
                {
                    $batterieData["produit_id"] = $data["produit_id"];
                }

                Batterie::create($batterieData);
                break;
        }

        $inserted = null;
        try {
            $inserted = Equipement::create($data);
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
            return redirect()->back();
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

        return redirect()->route('equipements.index');
    }
}
