<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class malepedigree extends Model
{
    use HasFactory;

    public function malepedigree(){
        return $this->hasMany('App\Models\Dog', 'mped_id');
    }
}
