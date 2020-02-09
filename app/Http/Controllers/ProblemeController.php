<?php

namespace App\Http\Controllers;

use App\Probleme;
use Illuminate\Database\QueryException;

class ProblemeController extends Controller
{
    public function index()
    {
        return view('problemes.index', [
            "problemes" => Probleme::all()
        ]);
    }

    public function create() {
        return view('problemes.create');
    }

    public function store()
    {
        $data = request()->validate([
            'nom' => 'required',
            'description' => '',
            'equipement' => 'required',
            'media' => ''
        ]);

        $inserted = null;
        try {
            $inserted = Probleme::create($data);
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




        if (!request()->request->has("ajax"))
        {
            return redirect()->back();
        } else
        {
            return response()->json([
                "success" => true,
                "table" => "problemes",
                "data" => $inserted
            ], 200);
        }
    }

    public function show(Probleme $probleme)
    {
        return view('problemes.show', [
            'probleme' => $probleme
        ]);
    }

    public function edit(Probleme $probleme)
    {
        return view('problemes.edit', [
            'probleme' => $probleme
        ]);
    }

    public function update(Probleme $probleme)
    {
        $data = request()->$this->validate([
            'nom' => 'required',
            'description' => '',
            'equipement' => 'required',
            'media' => ''
        ]);

        dd($data);

        $probleme->update($data);

        return redirect()->route('problemes.show', $probleme);
    }

    public function destroy(Batiment $batiment)
    {
        $batiment->delete();

        return redirect()->route('problemes.index');
    }
}
