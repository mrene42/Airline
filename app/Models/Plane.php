<?php

namespace App\Models;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plane extends Model
{
    protected $fillable = [
        'name',
        'seats',
        'imgplane',
    ];

    public function flights(): HasMany
    {
        return $this->hasMany(Flight::class);
    }
}
