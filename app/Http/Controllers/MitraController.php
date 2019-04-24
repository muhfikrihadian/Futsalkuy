<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Auth;
use App\JamOperasi;
use App\Lapangan;
use App\Profile_Customer;
use App\Profile_Mitra;
use App\Reservation;
use App\User;

class MitraController extends Controller
{
    public function index()
    {
        return view('Mitra.dashboard');
    }
    public function pemesanan()
    {
        return view('Mitra.pemesanan');
    }
    public function lapangan()
    {
        $id = Profile_Mitra::where('id_user', '=', Auth::id())->get();
        foreach ($id as $identitas)
        $idm = $identitas->id;

        $data['lapangan'] = Lapangan::where('id_mitra', '=', $idm)->get();   
        return view('Mitra.lapangan', $data);
    }
    public function tambahLapangan()
    {
        $data['id'] = Profile_Mitra::where('id_user', '=', Auth::id())->get();
        return view('Mitra.tambahlapangan', $data);
    }
    public function tambahLapanganProses(Request $r)
    {
        $file = $r->file('photo');
        $gambar = $file->getClientOriginalName();
        $r->file('photo')->move(public_path('images/Lapangan'), $gambar);

        $save = new Lapangan;
        $save->id_mitra = $r->id_mitra;
        $save->nama = $r->nama;
        $save->foto = $gambar;
        $save->tarif = $r->tarif;
        $save->save();
        return redirect()->route('mitra.lapangan');
    }
    public function laporan()
    {
        return view('Mitra.laporan');
    }
    public function profile()
    {
        return view('Mitra.profile');
    }
    public function isiProfile(Request $r){
        $file = $r->file('photo');
        $gambar = $file->getClientOriginalName();
        $r->file('photo')->move(public_path('images/Users/Mitra'), $gambar);

        $save = new Profile_Mitra;
        $save->id_user = Auth::id();
        $save->nama = $r->nama;
        $save->nomor_telephone = $r->nomor;
        $save->foto = $gambar;
        $save->kota = $r->kota;
        $save->alamat = $r->alamat;
        $save->na_rek = $r->na_rek;
        $save->no_rek = $r->no_rek;
        $save->tipe_mitra = $r->tipe;
        $save->save();
        return redirect()->route('mitra.profile');

    }
    public function settings()
    {
        return view('Mitra.settings');
    }
}
