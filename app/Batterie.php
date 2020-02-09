<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batterie extends Model
{
    protected $guarded = [];

    public function produits() {
        return $this->hasMany(Produit::class);
    }
}
