<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panneau extends Model
{
    protected $guarded = [];

    public function produits() {
        return $this->hasMany(Produit::class);
    }
}
