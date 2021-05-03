<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class pedigree extends Model
{
    use HasFactory;

    public function fm_ped(){
        return $this->belongsTo('App\Models\Femalepedigree');
    }

    public function m_ped(){
        return $this->belongsTo('App\Models\Malepedigree');
    }
}
