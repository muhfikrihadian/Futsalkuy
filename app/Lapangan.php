<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    protected $fillable = [
        'id', 'id_mitra', 'nama', 'foto', 'tarif', 'tipe_lapangan', 'created_at',
    ];
    public function mitra(){
    	return $this->belongsTo('App\Profile_Mitra','id_mitra');
    }
}
