<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
      DB::table('users')->insert([
         [
           'name' => 'Muhammad Fikri hadian',
           'email' => 'muhfikrihadian@gmail.com',
           'password' => bcrypt('sportku123'),
           'role' => 'Customer',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'name' => 'Planet Futsal',
           'email' => 'planet@gmail.com',
           'password' => bcrypt('planet'),
           'role' => 'Mitra',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'name' => 'Artu Futsal',
           'email' => 'artu@gmail.com',
           'password' => bcrypt('artu'),
           'role' => 'Mitra',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ],
         [
           'name' => 'Admin Futsalkuy',
           'email' => 'admin@gmail.com',
           'password' => bcrypt('futsalkuy'),
           'role' => 'Admin',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
         ]
     ]);
    }
}
