<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
           'password' => bcrypt('emefha1491'),
           'role' => 'Customer',
         ],
         [
           'name' => 'Planet Futsal',
           'email' => 'planet@gmail.com',
           'password' => bcrypt('planet'),
           'role' => 'Mitra',
         ],
         [
           'name' => 'Admin Futsalkuy',
           'email' => 'admin@gmail.com',
           'password' => bcrypt('futsalkuy'),
           'role' => 'Admin',
         ]
     ]);
    }
}
