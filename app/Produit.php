<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $guarded = [];

    public function equipements() {
        return $this->hasMany(Equipement::class);
    }

    public function panneau() {
        return $this->belongsTo(Panneau::class);
    }

    public function batterie() {
        return $this->belongsTo(Batterie::class);
    }
}
