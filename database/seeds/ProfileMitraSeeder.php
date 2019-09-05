<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfileMitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile__mitras')->insert([
         [
           'id_user' => 2,
           'nama' => 'Planet Futsal',
           'nomor_telephone' => '089580546132',
           'foto' => 'planet.jpg',
           'kota' => 'Jakarta Utara',
           'alamat' => 'Jalan Kebon Sirih No.20',
           'na_rek' => 'Bambang Hadijaya',
           'no_rek' => '01248798578',
           'tipe_mitra' => 'Futsal',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'id_user' => 3,
           'nama' => 'Artu Futsal',
           'nomor_telephone' => '089688975009',
           'foto' => 'artu.jpg',
           'kota' => 'Jakarta Selatan',
           'alamat' => 'Jalan Maju Mundur No.90',
           'na_rek' => 'Aldi Sutrisno',
           'no_rek' => '044473658690',
           'tipe_mitra' => 'Futsal',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ]
     ]);
    }
}
