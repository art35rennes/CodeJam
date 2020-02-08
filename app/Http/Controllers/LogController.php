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
        return ($type > 2 ? view('logs.create.batiment') : view('logs.create.equipement'));
    }

    public function store()
    {
        $data = request()->validate([
            'nom' => 'required',
            'reference' => 'required',
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
        return view('log.show', [
            'log' => $log
        ]);
    }

    public function edit(Batiment $batiment)
    {
        return view('batiments.edit', compact('batiment'));
    }

    public function update(Batiment $batiment)
    {
        $data = request()->$this->validate([
            'nom' => 'required',
            'description' => '',
            'geolocalisation' => ''
        ]);

        dd($data);

        $batiment->update($data);

        return redirect("/batiments/{$batiment->id}");
    }

    public function destroy(Batiment $batiment)
    {
        $batiment->delete();

        return redirect()->route('batiments.index');
    }
}
