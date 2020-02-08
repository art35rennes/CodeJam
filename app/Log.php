<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function equipement() {
        return $this->belongsTo(Equipement::class);
    }

    public function batiment() {
        return $this->belongsTo(Batiment::class);
    }
}