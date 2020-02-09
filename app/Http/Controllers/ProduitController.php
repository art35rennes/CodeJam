<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Database\QueryException;

class ProduitController extends Controller
{
    public function index()
    {
        return view('models.index', [
            "models" => Produit::all()
        ]);
    }

    public function create()
    {
        return view('models.create');
    }

    public function store()
    {
        $data = request()->validate([
            'marque' => 'required',
            'reference' => 'required',
            'equipement' => 'required',
            'largeur' => '',
            'hauteur' => '',
            'profondeur' => '',
            'poids' => '',
            'rendement' => '',
            'certifie' => 'boolean'
        ]);

        $inserted = null;

        try {
            $inserted = Produit::create($data);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return json_encode([
                    "message" => $e->getMessage(),
                    "table" => "models",
                    "data" => $inserted
                ]);
            }
        }

        return response()->json([
            "success" => true,
            "table" => "models",
            "data" => $inserted
        ], 200);
    }

    public function show(Produit $model)
    {
        return view('models.show', [
            'model' => $model
        ]);
    }

    public function edit(Produit $model)
    {
        return view('models.edit', [
            'model' => $model
        ]);
    }

    public function update(Produit $model)
    {
        $data = request()->$this->validate([
            'marque' => 'required',
            'reference' => 'required',
            'equipement' => 'required',
            'largeur' => '',
            'hauteur' => '',
            'profondeur' => '',
            'poids' => '',
            'rendement' => '',
            'certifie' => 'boolean'
        ]);

        $updated = false;

        try {
            $updated = $model->update($data);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return json_encode([
                    "message" => $e->getMessage(),
                    "data" => $updated,
                    "table" => "models"
                ]);
            }
        }

        return response()->json([
            "success" => $updated,
            "table" => "models",
            "data" => $updated
        ], 200);
    }

    public function destroy(Produit $model)
    {
        $model->delete();

        return redirect()->route('models.index');
    }
}
