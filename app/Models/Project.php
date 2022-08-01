<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'totalSupply',
        'totalVolume',
        'totalFloor',
        'totalOwners'
    ];

    public function image()
    {
        return $this->belongsTo('App\Models\Collection');
    }
}
