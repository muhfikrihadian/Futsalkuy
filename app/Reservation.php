<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'id', 'id_lapangan', 'nama_mitra', 'nama_customer', 'nama_rekening', 'nomor_rekening', 'jam', 'tanggal', 'bukti_transfer', 'status',
    ];
}
