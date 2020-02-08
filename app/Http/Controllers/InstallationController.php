<?php

namespace App\Http\Controllers;

use App\Batiment;
use App\Installation;

class InstallationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Batiment $batiment)
    {
        return view('installations.index', compact($batiment->installations()));
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
        return view('installations.show', compact(['batiment','installation']));
    }

    public function edit(Batiment $batiment, Installation $installation)
    {
        return view('installations.edit', compact(['batiment','installation']));
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
