<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Probleme extends Model
{
    public function solutions() {
        return $this->hasMany(Solution::class);
    }
}
