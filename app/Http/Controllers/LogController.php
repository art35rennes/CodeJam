<?php

namespace App\Http\Controllers;

use App\Log;
use Illuminate\Database\QueryException;

class LogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('logs.index', [
            "logs" => Log::all(),
        ]);
    }

    public function create($type) {
        return $type == "batiment" ? view('logs.create',['type'=>'batiment', "batiments" => auth()->user()->batiments]) : view('logs.create',['type'=>'equipement',"equipements"=>[]]);
    }

    public function store()
    {
        $data = request()->validate([
            'nom' => 'required',
            'reference_id' => 'required',
            'type_reference' => 'required|in:batiment,equipement',
            'valeur' => 'required',
            'consommation' => 'required'
        ]);

        $inserted = null;
        try {
            $inserted = Log::create($data);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {
                return json_encode([
                    "message" => $e->getMessage(),
                    "table" => "logs",
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
                "table" => "logs",
                "data" => $inserted
            ], 200);
        }
    }

    public function show(Log $log)
    {
        $data = ["log" => $log];

        return $log['type_reference'] == "batiment" ? view('logs.show.batiment', $data) : view('logs.show.equipement', $data);
    }

    public function edit(Log $log)
    {
        $data = ["log" => $log];

        return $log['type_reference'] == "batiment" ? view('logs.edit.batiment', $data) : view('logs.edit.equipement', $data);
    }

    public function update(Log $log)
    {
        $data = request()->$this->validate([
            'nom' => 'required',
            'reference_id' => 'required',
            'type_reference' => 'required|in:batiment,equipement',
            'valeur' => 'required',
            'consommation' => 'required'
        ]);

        dd($data);

        $log->update($data);

        return $log['type_reference'] == "batiment" ? view('logs.show.batiment', $data) : view('logs.show.equipement', $data);
    }

    public function destroy(Log $log)
    {
        $log->delete();

        return redirect()->route('logs.index');
    }
}
