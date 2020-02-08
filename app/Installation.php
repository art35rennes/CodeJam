<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installation extends Model
{
    public function batiment() {
        return $this->belongsTo(Batiment::class);
    }

    public function equipements() {
        return $this->hasMany(Equipement::class);
    }

    public function installation_solutions() {
        return $this->hasMany(Installation_Solution::class);
    }
}
