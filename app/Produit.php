<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produit extends Model
{
    protected $guarded = [];

    public function equipements()
    {
        return $this->hasMany(Equipement::class);
    }

    public function panneau($produitTypeId)
    {
        return DB::table('panneaus')
            ->select('panneaus.id', 'puissance_nominale', 'tension_nominale', 'tension_maximale', 'courant_maximal', 'tension_circuit_ouvert', 'courant_court_circuit')
            ->leftJoin('produits', 'panneaus.id', '=' ,'produits.type_id')
            ->where('panneaus.id', $produitTypeId)
            ->get();
    }

    public function batterie($produitTypeId)
    {
        return DB::table('batteries')
        ->select('batteries.id', 'tension_stockage', 'capacite_stockage', 'batteries.type')
        ->leftJoin('produits', 'batteries.id', '=' ,'produits.type_id')
        ->where('batteries.id', $produitTypeId)
        ->get();
    }
}
