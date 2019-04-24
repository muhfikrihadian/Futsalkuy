<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_Customer extends Model
{
    protected $fillable = [
        'id', 'id_user', 'nama', 'nomor_telephone', 'foto', 'alamat', 'no_rek', 'na_rek',
    ];
}
