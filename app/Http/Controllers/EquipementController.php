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
            'model_id' => 'required',
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
                    "message" => $e->getMessage()
                ]);
            }
        }

        return response()->json([
            "success" => true,
            "id" => $inserted->id
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
            'model_id' => 'required',
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
                    "message" => $e->getMessage()
                ]);
            }
        }

        return response()->json([
            "success" => $updated
        ], 200);
    }

    public function destroy(Equipement $equipement)
    {
        $equipement->delete();

        return redirect()->route('equipements.index');
    }
}
