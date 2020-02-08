<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batiment extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function installations() {
        return $this->hasMany(Installation::class);
    }
}
