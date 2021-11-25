<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasFactory;
    function country() {
        return $this->hasMany(Country::class, 'id', 'continent_id');
    }
}
