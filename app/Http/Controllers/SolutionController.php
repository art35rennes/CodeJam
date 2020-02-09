<?php

namespace App\Http\Controllers;

use App\Probleme;
use App\Solution;
use Illuminate\Database\QueryException;

class SolutionController extends Controller
{
    public function index()
    {
        return view('solutions.index', [
            "solutions" => Solution::all()
        ]);
    }

    public function create() {
        return view('solutions.create');
    }

    public function store(Probleme $probleme)
    {
        $data = request()->validate([
            'nom' => 'required',
            'description' => '',
            'media' => ''
        ]);

        $inserted = null;
        try {
            $inserted = $probleme->solutions()->create($data);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $inserted = "catch";
                return json_encode([
                    "message" => $e->getMessage(),
                    "table" => "solutions",
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
                "table" => "solutions",
                "data" => $inserted
            ], 200);
        }
    }

    public function show(Probleme $probleme, Solution $solution)
    {
        return view('solutions.show', [
            'probleme' => $probleme,
            'solution' => $solution
        ]);
    }

    public function edit(Probleme $probleme, Solution $solution)
    {
        return view('solutions.edit', [
            'probleme' => $probleme,
            'solution' => $solution
        ]);
    }

    public function update(Probleme $probleme, Solution $solution)
    {
        $data = request()->$this->validate([
            'nom' => 'required',
            'description' => '',
            'media' => ''
        ]);

        $solution->update($data);

        return redirect()->route('solutions.show', $solution);
    }

    public function destroy(Solution $solution)
    {
        $solution->delete();

        return redirect()->route('solutions.index');
    }
}
