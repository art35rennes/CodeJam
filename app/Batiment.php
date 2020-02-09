<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Batiment extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('User');
    }

    public function logs() {
        //DB::enableQueryLog();
        $i = DB::table('logs')->select('*')->where('type_reference', '=', 'batiment')->get();
        //dd(DB::getQueryLog());
        return $i;

    }

    public function installations() {
        return $this->hasMany(Installation::class);
    }
}
