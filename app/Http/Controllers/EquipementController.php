<?php

namespace App\Http\Controllers;

use App\Equipement;
use Illuminate\Database\QueryException;

class EquipementController extends Controller
{
    public function index()
    {
        return view('equipements.index', [
            "equipements" => Equipement::all()
        ]);
    }

    public function create()
    {
        return view('equipements.create');
    }

    public function store()
    {
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
