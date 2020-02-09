<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Panneau extends Model
{
    protected $guarded = [];

    public function produit()
    {
        return DB::table('produits')->select('*')->where('type_id', '=', 'id')->get();
    }
}
