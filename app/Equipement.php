<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    public function installation() {
        return $this->belongsTo(Installation::class);
    }

    public  function logs() {
        return $this->hasMany(Log::class);
    }

    public function produit() {
        return $this->belongsTo(Produit::class);
    }
}
