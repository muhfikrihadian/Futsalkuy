<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    protected $fillable = [
        'id', 'id_mitra', 'nama', 'foto', 'tarif', 'tipe_lapangan', 'created_at',
    ];
}
