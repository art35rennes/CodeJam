<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;

class ModelController extends Controller
{
    public function index()
    {
        return view('models.index', [
            "models" => Model::all()
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
            'equipement' => 'required',
            'certifie' => 'boolean'
        ]);

        $inserted = null;

        try {
            $inserted = Model::create($data);
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

    public function show(Model $model)
    {
        return view('models.show', [
            'model' => $model
        ]);
    }

    public function edit(Model $model)
    {
        return view('models.edit', [
            'model' => $model
        ]);
    }

    public function update(Model $model)
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
            'equipement' => 'required',
            'certifie' => 'boolean'
        ]);

        $updated = false;

        try {
            $updated = $model->update($data);
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

    public function destroy(Model $model)
    {
        $model->delete();

        return redirect()->route('models.index');
    }
}
