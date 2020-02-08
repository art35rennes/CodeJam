<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batiment extends Model
{
    public function user() {
        return $this->belongsTo('User');
    }

    public function installations() {
        return $this->hasMany(Installation::class);
    }

    public function logs() {
        return $this->hasMany(Log::class);
    }
}
