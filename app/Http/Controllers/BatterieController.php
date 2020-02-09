<?php

namespace App\Http\Controllers;

use App\Batterie;
use Illuminate\Database\QueryException;

class BatterieController extends Controller
{
    public function index()
    {
        return view('batteries.index', [
            "batteries" => Batterie::all()
        ]);
    }

    public function create()
    {
        return view('batteries.create');
    }

    public function store()
    {
        $data = request()->validate([
            'produit_id' => 'required',
            'tension_stockage' => 'required',
            'capacite_stockage' => 'required'
        ]);

        $inserted = null;
        try {
            $inserted = Batterie::create($data);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {
                return json_encode([
                    "message" => $e->getMessage(),
                    "table" => "batteries",
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
                "table" => "batteries",
                "data" => $inserted
            ], 200);
        }
    }

    public function show(Batterie $batterie)
    {
        return view('batteries.show', [
            'batterie' => $batterie
        ]);
    }

    public function edit(Batterie $batterie)
    {
        return view('batteries.edit', [
            'batterie' => $batterie
        ]);
    }

    public function update(Batterie $batterie)
    {
        $data = request()->$this->validate([
            'produit_id' => 'required',
            'tension_stockage' => 'required',
            'capacite_stockage' => 'required'
        ]);

        $updated = false;

        try {
            $updated = $batterie->update($data);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return json_encode([
                    "message" => $e->getMessage(),
                    "table" => "batteries",
                    "data" =>$updated
                ]);
            }
        }

        return response()->json([
            "success" => $updated,
            "table" => "batteries",
            "data" =>$updated
        ], 200);
    }

    public function destroy(Batterie $batterie)
    {
        $batterie->delete();

        return redirect()->route('batteries.index');
    }
}
