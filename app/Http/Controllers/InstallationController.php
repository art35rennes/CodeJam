<?php

namespace App\Http\Controllers;

use App\Batiment;
use App\Installation;
use Illuminate\Support\Facades\DB;

class InstallationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $list = DB::table('equipements')
            ->select('installations.id', 'installations.nom', 'batiments.nom as batiment', DB::raw('count(equipements.model_id) as equipements'))
            ->leftJoin('installations', 'installations.id', '=' , 'equipements.installation_id')
            ->leftJoin('batiments', 'batiments.id', '=', 'installations.batiment_id')
            ->where('batiments.user_id', '=', auth()->user()->id)
            ->groupBy('installations.id')
            ->get();

        dd($list);

        return view('installations.list', [
            "installations" => $list
        ]);
    }

    public function index(Batiment $batiment)
    {
        return view('installations.index', [
            "installations" => $batiment->installations()
        ]);
    }

    public function create() {
        return view('installations.create');
    }

    public function store(Batiment $batiment)
    {
        $data = request()->validate([
            'nom' => 'required',
            'description' => ''
        ]);

        dd($data);

        $batiment->installations()->create($data);

        return view('installations.index');
    }

    public function show(Batiment $batiment, Installation $installation)
    {
        return view('installations.show', [
            'batiment' => $batiment,
            'installation' => $installation]);
    }

    public function edit(Batiment $batiment, Installation $installation)
    {
        return view('installations.edit', [
            'batiment' => $batiment,
            'installation' => $installation
        ]);
    }

    public function update(Batiment $batiment, Installation $installation)
    {
        $data = request()->$this->validate([
            'nom' => 'required',
            'description' => ''
        ]);

        dd($data);

        $installation->update($data);

        return redirect()->route('installations.show', [$batiment, $installation]);
    }

    public function destroy(Batiment $batiment, Installation $installation)
    {
        $installation->delete();

        return redirect()->route('installations.index', $batiment);
    }
}
