<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function equipement() {
        return $this->belongsTo(Equipement::class);
    }
}
