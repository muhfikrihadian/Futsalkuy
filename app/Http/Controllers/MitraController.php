<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('Mitra.lapangan');
    }
    public function laporan()
    {
        return view('Mitra.laporan');
    }
    public function profile()
    {
        return view('Mitra.profile');
    }
    public function settings()
    {
        return view('Mitra.settings');
    }
}
