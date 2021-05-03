<?php

namespace App\Models;
use App\Models\Femalepedigree;
use App\Models\Malepedigree;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    protected $fillable = [
        'callName',
        'regName',
        'mped_id',
        'fped_id',
        'clearances',
        'birthday',
        'pic',
        'dogstat',
        'colour',
        'sex',
        'blurb'
    ];

    public function malepedigree(){
        return $this->belongsTo('App\Models\Malepedigree','mped_id','id');
    }
    public function femalepedigree(){
        return $this->belongsTo('App\Models\Femalepedigree');     
    }
}
