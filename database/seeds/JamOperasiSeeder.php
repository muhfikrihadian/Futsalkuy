<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JamOperasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jam_operasis')->insert([
         [
           'id_lapangan' => 1,
           'jam_operasi' => '08.00',
           'status' => 'Tersedia',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'id_lapangan' => 1,
           'jam_operasi' => '09.00',
           'status' => 'Tersedia',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'id_lapangan' => 1,
           'jam_operasi' => '10.00',
           'status' => 'Tersedia',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'id_lapangan' => 1,
           'jam_operasi' => '11.00',
           'status' => 'Tersedia',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'id_lapangan' => 2,
           'jam_operasi' => '18.00.00',
           'status' => 'Tersedia',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'id_lapangan' => 2,
           'jam_operasi' => '19.00',
           'status' => 'Tersedia',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'id_lapangan' => 2,
           'jam_operasi' => '20.00',
           'status' => 'Tersedia',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'id_lapangan' => 2,
           'jam_operasi' => '21.00',
           'status' => 'Tersedia',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'id_lapangan' => 3,
           'jam_operasi' => '14.00',
           'status' => 'Tersedia',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'id_lapangan' => 3,
           'jam_operasi' => '15.00',
           'status' => 'Tersedia',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'id_lapangan' => 3,
           'jam_operasi' => '16.00',
           'status' => 'Tersedia',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
     ]);
    }
}
