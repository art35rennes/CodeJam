<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Database\QueryException;

class ProduitController extends Controller
{
    public function index()
    {
        return view('produits.index', [
            "produits" => Produit::all()
        ]);
    }

    public function create()
    {
        return view('produits.create');
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
                $inserted = "catch";
                return json_encode([
                    "message" => $e->getMessage(),
                    "table" => "produits",
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
                "table" => "produits",
                "data" => $inserted
            ], 200);
        }
    }

    public function show(Produit $produit)
    {
        return view('produits.show', [
            'produit' => $produit
        ]);
    }

    public function edit(Produit $produit)
    {
        return view('produits.edit', [
            'produit' => $produit
        ]);
    }

    public function update(Produit $produit)
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
            $updated = $produit->update($data);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return json_encode([
                    "message" => $e->getMessage(),
                    "data" => $updated,
                    "table" => "produits"
                ]);
            }
        }

        return response()->json([
            "success" => $updated,
            "table" => "produits",
            "data" => $updated
        ], 200);
    }

    public function destroy(Produit $produit)
    {
        $produit->delete();

        return redirect()->route('produits.index');
    }
}
