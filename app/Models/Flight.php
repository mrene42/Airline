<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Flight extends Model
{
    protected $fillable = [
        'date',
        'departure',
        'arrival',
        'plane_id',
        'available',
    ];

    public function plane(): BelongsTo
    {
        return $this->belongsTo(Plane::class);
    }
}
