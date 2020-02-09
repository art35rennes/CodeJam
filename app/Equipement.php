<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Equipement extends Model
{
    protected $guarded = [];

    public function installation() {
        return $this->belongsTo(Installation::class);
    }

    public function logs() {
       /* $i = DB::table('logs')->select('')->where('type_reference', '=', 'equipement')->get();

        return DB::table('logs')
            ->select('panneaus.id', 'puissance_nominale', 'tension_nominale', 'tension_maximale', 'courant_maximal', 'tension_circuit_ouvert', 'courant_court_circuit')
            ->leftJoin('produits', 'panneaus.id', '=' ,'produits.type_id')
            ->where('panneaus.id', $produitTypeId)
            ->get();*/
    }

    public function produit() {
        return $this->belongsTo(Produit::class);
    }
}
