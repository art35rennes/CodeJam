<?php

namespace App\Http\Controllers;

use App\Batiment;
use App\Installation;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class InstallationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        DB::enableQueryLog();
        $userId = auth()->user()->id;
        /*$list = DB::table('equipements')
            ->select('installations.id', 'installations.nom', 'batiments.nom as batiment', DB::raw('count(equipements.produit_id) as equipements'))
            ->leftJoin('installations', 'installations.id', '=' , 'equipements.installation_id')
            ->leftJoin('batiments', 'batiments.id', '=', 'installations.batiment_id')
            ->where('batiments.user_id', $userId)
            ->groupBy('installations.id')
            ->get();
*/
        $list = DB::select(DB::raw("select `installations`.`id`, `installations`.`nom`, `batiments`.`nom` as `batiment`, count(equipements.produit_id) as equipements from `installations` left join `equipements` on `installations`.`id` = `equipements`.`installation_id` left join `batiments` on `batiments`.`id` = `installations`.`batiment_id` where `batiments`.`user_id` = $userId group by `installations`.`id`"));

        //dd(DB::getQueryLog());

        return view('installations.list', [
            "installations" => $list
        ]);
    }

    public function index(Batiment $batiment)
    {
        return view('installations.index', [
            "installations" => $batiment->installations,
            "produits" => Produit::all()
        ]);
    }

    public function create() {
        return view('installations.create', [
            "batiments" => auth()->user()->batiments
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'nom' => 'required',
            'description' => '',
            'batiment_id' => ''
        ]);

        $inserted = null;

        if (request()->request->has("ajax"))
        {
            try {
                $inserted = auth()->user()->dernierBatiment->installations()->create($data);
            } catch (QueryException $e) {
                $errorCode = $e->errorInfo[1];
                if ($errorCode == 1062) {
                    return json_encode([
                        "message" => $e->getMessage(),
                        "table" => "installations",
                        "data" => $inserted
                    ]);
                }
            }
            return redirect()->back();
        } else
        {
            try {
                $batiment = Batiment::find($data['batiment_id']);
                $inserted = $batiment->installations()->create($data);
            } catch (QueryException $e) {
                $errorCode = $e->errorInfo[1];
                if ($errorCode == 1062) {
                    return json_encode([
                        "message" => $e->getMessage(),
                        "table" => "installations",
                        "data" => $inserted
                    ]);
                }
            }

            return response()->json([
                "success" => true,
                "table" => "installations",
                "data" => $inserted
            ], 200);
        }
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

        $installation->update($data);

        return redirect()->route('installations.show', [$batiment, $installation]);
    }

    public function destroy(Batiment $batiment, Installation $installation)
    {
        $installation->delete();

        return redirect()->route('installations.index', $batiment);
    }
}
