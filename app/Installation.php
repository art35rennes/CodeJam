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

    public function solutions() {
        return $this->belongsToMany(Solution::class);
    }
}

