<?php

namespace App\Http\Controllers;

use App\Panneau;
use Illuminate\Database\QueryException;

class PanneauController extends Controller
{
    public function index()
    {
        return view('panneaux.index', [
            "panneaux" => Panneau::all()
        ]);
    }

    public function create()
    {
        return view('panneaux.create');
    }

    public function store()
    {
        $data = request()->validate([
            'produit_id' => 'required',
            'puissance_nominale' => 'required',
            'tension_nominale' => 'required',
            'tension_maximale' => 'required',
            'courant_maximal' => 'required',
            'courant_court_circuit' => 'required'
        ]);

        $inserted = null;

        try {
            $inserted = Panneau::create($data);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return json_encode([
                    "message" => $e->getMessage(),
                    "table" => "panneaux",
                    "data" => $inserted
                ]);
            }
        }

        return response()->json([
            "success" => true,
            "table" => "panneaux",
            "data" => $inserted
        ], 200);
    }

    public function show(Panneau $panneau)
    {
        return view('panneaux.show', [
            'panneau' => $panneau
        ]);
    }

    public function edit(Panneau $panneau)
    {
        return view('panneaux.edit', [
            'panneau' => $panneau
        ]);
    }

    public function update(Panneau $panneau)
    {
        $data = request()->$this->validate([
            'produit_id' => 'required',
            'puissance_nominale' => 'required',
            'tension_nominale' => 'required',
            'tension_maximale' => 'required',
            'courant_maximal' => 'required',
            'courant_court_circuit' => 'required'
        ]);

        $updated = false;

        try {
            $updated = $panneau->update($data);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return json_encode([
                    "message" => $e->getMessage(),
                    "table" => "panneaux",
                    "data" => $updated
                ]);
            }
        }

        return response()->json([
            "success" => $updated,
            "table" => "panneaux"
        ], 200);
    }

    public function destroy(Panneau $panneau)
    {
        $panneau->delete();

        return redirect()->route('panneaux.index');
    }
}
