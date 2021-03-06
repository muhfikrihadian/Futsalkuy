<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_Mitra extends Model
{
	protected $fillable = [
    'id', 'id_user', 'nama', 'nomor_telephone', 'foto', 'kota', 'alamat', 'na_rek', 'no_rek', 'tipe_mitra', 'created_at',
    ];

    public function users(){
        return $this->belongsTo('App\User','id_user','id');
    }
    public function lapangans(){
    	return $this->hasMany('App\Lapangan','id_mitra');
    }
}
