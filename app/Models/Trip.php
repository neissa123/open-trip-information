<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'trip_name', 'destination','detail', 'start_date', 'end_date', 'price', 'image_url'
    ];

    public function details()
    {
        return $this->hasMany(TripDetail::class);
    }
}
