<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Probleme extends Model
{
    protected $guarded = [];

    public function solutions() {
        return $this->hasMany(Solution::class);
    }
}
