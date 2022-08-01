<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $primaryKey = "uuid";
    protected $casts = [
        'assets' => 'array',
        'links' => 'array',
        'txVolume' => 'array',
        'avgPrice' => 'array',
        'floorPrice' => 'array',
        'txVolumeME' => 'array',
    ];
    protected $fillable = [
        "uuid",
        "symbol",
        "name",
        "description",
        "totalItems",
        'totalSupply',
        'totalVolume',
        'totalFloor',
        'totalOwners',
        "date",
        "image",
        "assets",
        "links",
        "txVolume",
        "avgPrice",
        "floorPrice",
        "txVolumeME",
    ];
}
