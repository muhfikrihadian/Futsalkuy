<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JamOperasi extends Model
{
    protected $fillable = [
        'id', 'id_lapangan', 'jam', 'status',
    ];
}
