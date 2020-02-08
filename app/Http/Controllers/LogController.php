<?php

namespace App\Http\Controllers;

use App\Log;

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
        return $type == "batiment" ? view('logs.create.batiment') : view('logs.create.equipement');
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

        dd($data);

        Log::create($data);

        return view('logs.index');
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
