<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    public function probleme() {
        return $this->belongsTo(Probleme::class);
    }

    public function installation_solutions() {
        return $this->hasMany(Installation_Solution::class);
    }
}
