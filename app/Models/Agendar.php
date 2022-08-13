<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendar extends Model
{
    use HasFactory;
    protected $casts = [
        'solicitud_fecha' => 'datetime:Y/m/d', // Change your format
    ];
}
