<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LapanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lapangans')->insert([
         [
           'id_mitra' => 1,
           'nama' => 'Lapangan A',
           'foto' => 'lapangan1.jpg',
           'tarif' => '100000',
           'tipe_lapangan' => 'Futsal',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'id_mitra' => 1,
           'nama' => 'Lapangan B',
           'foto' => 'lapangan2.jpg',
           'tarif' => '100000',
           'tipe_lapangan' => 'Futsal',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'id_mitra' => 2,
           'nama' => 'Lapangan A',
           'foto' => 'lapangan3.jpg',
           'tarif' => '90000',
           'tipe_lapangan' => 'Futsal',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ]
     ]);
    }
}
