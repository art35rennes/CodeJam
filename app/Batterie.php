<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batterie extends Model
{
    public function models() {
        return $this->hasMany(Produit::class);
    }
}
