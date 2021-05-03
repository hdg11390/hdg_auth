<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class femalepedigree extends Model
{
    use HasFactory;

    public function femalepedigrees(){
        return $this->hasMany('App\Models\Pedigree');
    }

}
