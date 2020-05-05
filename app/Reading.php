<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    protected $fillable = [
        'users_id',
        'places_id',
        'temperature',
        'co',
        'humidity',
        'dust_particle',
        'comments',
    ];
}
