<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripDetail extends Model
{
    use HasFactory;  
    protected $fillable = [
        'trip_id', 'detail_description'
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
