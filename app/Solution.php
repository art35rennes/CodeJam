<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $guarded = [];

    public function probleme() {
        return $this->belongsTo(Probleme::class);
    }

    public function installations() {
        return $this->belongsToMany(Installation::class);
    }
}
