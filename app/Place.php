<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'users_id',
        'name',
        'street',
        'number',
        'district',
        'complement',
        'zip_code',
        'city',
        'state',
        'phone',
        'status',
        'comments',
        'temperature',
        'humidity',
    ];

}
