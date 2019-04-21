<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_Customer extends Model
{
    protected $fillable = [
        'id', 'id_user', 'nama', 'nomor_telephone', 'foto', 'kota', 'alamat', 'no_rek', 'na_rek', 'tipe_mitra',
    ];
}
