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

class CustomerController extends Controller
{
    public function index()
    {
        return view('Customer.beranda');
    }
    public function indexFutsal()
    {
    	$data['field'] = Lapangan::orderBy('created_at', 'desc')->orderBy('tipe_lapangan', 'Futsal')->paginate(2);
        $lapangan = Lapangan::all();
        foreach($lapangan as $field)
        $data['mitra'] = Profile_Mitra::orderBy('id', $field->id_mitra)->get();
        return view('Customer.Futsal.beranda', $data);
    }
    public function lapangan($id){
    	$data['field'] = Lapangan::where('id', '=', $id)->get();
    	$lapangan = Lapangan::where('id', '=', $id)->get();
    	foreach($lapangan as $field)
    	$data['vendor'] = Profile_Mitra::where('id', '=', $field->id_mitra)->get();
        $data['waktu'] = JamOperasi::where('id_lapangan', '=', $id)->get();
        $data['free'] = JamOperasi::orderBy('id_lapangan', $id)->orderBy('status', 'Tersedia')->get();
        return view('Customer.Futsal.lapangan', $data);
    }
    public function booking(Request $r){
        $file = $r->file('bukti');
        $gambar = $file->getClientOriginalName();
        $r->file('bukti')->move(public_path('images/Bukti'), $gambar);

        $save = new Reservation;
        $save->id_lapangan = $r->id_lapangan;
        $save->nama_mitra = $r->nama_mitra;
        $save->nama_customer = $r->nama_customer;
        $save->nama_rekening = $r->narek;
        $save->nomor_rekening = $r->norek;
        $save->jam = $r->jam;
        $save->bukti_transfer = $gambar;
        $save->status = "Proses";
        $save->save();
        return redirect()->route('customer.index');
    }
}
