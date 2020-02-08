<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installation_Solution extends Model
{
    public function installation() {
        return $this->belongsTo(Installation::class);
    }

    public function solution() {
        return $this->belongsTo(Solution::class);
    }
}
