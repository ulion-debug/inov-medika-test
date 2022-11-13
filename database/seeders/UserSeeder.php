<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(
        ['id' => 1,
        'name'=> 'Administration',
        'email' => 'admin@gmail.com',
        'role' => 'administration',
        'asdep' => '',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('admin')]);
        
        \DB::table('users')->insert(
        ['id' => 2,
        'name'=> 'Eselon I',
        'email' => 'eseloni@gmail.com',
        'role' => 'eseloni',
        'asdep' => '',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('eseloni')]);
        
        \DB::table('users')->insert(
        ['id' => 3,
        'name'=> 'Deputi 1',
        'email' => 'd1asdep1@gmail.com',
        'role' => 'Deputi 1',
        'asdep' => 'Asdep 1',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d1asdep1'),]);

        \DB::table('users')->insert(
        ['id' => 4,
        'name'=> 'Deputi 1',
        'email' => 'd1asdep2@gmail.com',
        'role' => 'Deputi 1',
        'asdep' => 'Asdep 2',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d1asdep2')]);

        \DB::table('users')->insert(
        ['id' => 5,
        'name'=> 'Deputi 1',
        'email' => 'd1asdep3@gmail.com',
        'role' => 'Deputi 1',
        'asdep' => 'Asdep 3',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d1asdep3')]);

        \DB::table('users')->insert(
        ['id' => 6,
        'name'=> 'Deputi 1',
        'email' => 'd1asdep4@gmail.com',
        'role' => 'Deputi 1',
        'asdep' => 'Asdep 4',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d1asdep4')]);

        \DB::table('users')->insert(
        ['id' => 7,
        'name'=> 'Deputi 1',
        'email' => 'd1asdep5@gmail.com',
        'role' => 'Deputi 1',
        'asdep' => 'Asdep 5',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d1asdep5')]);

        \DB::table('users')->insert(
        ['id' => 8,
        'name'=> 'Deputi 2',
        'email' => 'd2asdep1@gmail.com',
        'role' => 'Deputi 2',
        'asdep' => 'Asdep 1',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d2asdep1')]);
    
        \DB::table('users')->insert(
        ['id' => 9,
        'name'=> 'Deputi 2',
        'email' => 'd2asdep2@gmail.com',
        'role' => 'Deputi 2',
        'asdep' => 'Asdep 2',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d2asdep2')]);
    
        \DB::table('users')->insert(
        ['id' => 10,
        'name'=> 'Deputi 2',
        'email' => 'd2asdep3@gmail.com',
        'role' => 'Deputi 2',
        'asdep' => 'Asdep 3',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d2asdep3')]);
    
        \DB::table('users')->insert(
        ['id' => 11,
        'name'=> 'Deputi 2',
        'email' => 'd2asdep4@gmail.com',
        'role' => 'Deputi 2',
        'asdep' => 'Asdep 4',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d2asdep4')]);
    
        \DB::table('users')->insert(
        ['id' => 12,
        'name'=> 'Deputi 2',
        'email' => 'd2asdep5@gmail.com',
        'role' => 'Deputi 2',
        'asdep' => 'Asdep 5',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d2asdep5')]);

        \DB::table('users')->insert(
        ['id' => 13,
        'name'=> 'Deputi 3',
        'email' => 'd3asdep1@gmail.com',
        'role' => 'Deputi 3',
        'asdep' => 'Asdep 1',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d3asdep1')]);
    
        \DB::table('users')->insert(
        ['id' => 14,
        'name'=> 'Deputi 3',
        'email' => 'd3asdep2@gmail.com',
        'role' => 'Deputi 3',
        'asdep' => 'Asdep 2',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d3asdep2')]);
    
        \DB::table('users')->insert(
        ['id' => 15,
        'name'=> 'Deputi 3',
        'email' => 'd3asdep3@gmail.com',
        'role' => 'Deputi 3',
        'asdep' => 'Asdep 3',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d3asdep3')]);
    
        \DB::table('users')->insert(
        ['id' => 16,
        'name'=> 'Deputi 3',
        'email' => 'd3asdep4@gmail.com',
        'role' => 'Deputi 3',
        'asdep' => 'Asdep 4',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d3asdep4')]);
    
        \DB::table('users')->insert(
        ['id' => 17,
        'name'=> 'Deputi 3',
        'email' => 'd3asdep5@gmail.com',
        'role' => 'Deputi 3',
        'asdep' => 'Asdep 5',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d3asdep5')]);

        \DB::table('users')->insert(
        ['id' => 18,
        'name'=> 'Deputi 4',
        'email' => 'd4asdep1@gmail.com',
        'role' => 'Deputi 4',
        'asdep' => 'Asdep 1',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d4asdep1')]);
    
        \DB::table('users')->insert(
        ['id' => 19,
        'name'=> 'Deputi 4',
        'email' => 'd4asdep2@gmail.com',
        'role' => 'Deputi 4',
        'asdep' => 'Asdep 2',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d4asdep2')]);
    
        \DB::table('users')->insert(
        ['id' => 20,
        'name'=> 'Deputi 4',
        'email' => 'd4asdep3@gmail.com',
        'role' => 'Deputi 4',
        'asdep' => 'Asdep 3',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d4asdep3')]);
    
        \DB::table('users')->insert(
        ['id' => 21,
        'name'=> 'Deputi 4',
        'email' => 'd4asdep4@gmail.com',
        'role' => 'Deputi 4',
        'asdep' => 'Asdep 4',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d4asdep4')]);
    
        \DB::table('users')->insert(
        ['id' => 22,
        'name'=> 'Deputi 4',
        'email' => 'd4asdep5@gmail.com',
        'role' => 'Deputi 4',
        'asdep' => 'Asdep 5',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d4asdep5')]);

        \DB::table('users')->insert(
        ['id' => 23,
        'name'=> 'Deputi 5',
        'email' => 'd5asdep1@gmail.com',
        'role' => 'Deputi 5',
        'asdep' => 'Asdep 1',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d5asdep1')]);
    
        \DB::table('users')->insert(
        ['id' => 24,
        'name'=> 'Deputi 5',
        'email' => 'd5asdep2@gmail.com',
        'role' => 'Deputi 5',
        'asdep' => 'Asdep 2',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d5asdep2')]);
    
        \DB::table('users')->insert(
        ['id' => 25,
        'name'=> 'Deputi 5',
        'email' => 'd5asdep3@gmail.com',
        'role' => 'Deputi 5',
        'asdep' => 'Asdep 3',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d5asdep3')]);
    
        \DB::table('users')->insert(
        ['id' => 26,
        'name'=> 'Deputi 5',
        'email' => 'd5asdep4@gmail.com',
        'role' => 'Deputi 5',
        'asdep' => 'Asdep 4',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d5asdep4')]);
    
        \DB::table('users')->insert(
        ['id' => 27,
        'name'=> 'Deputi 5',
        'email' => 'd5asdep5@gmail.com',
        'role' => 'Deputi 5',
        'asdep' => 'Asdep 5',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d5asdep5')]);

        \DB::table('users')->insert(
        ['id' => 28,
        'name'=> 'Deputi 6',
        'email' => 'd6asdep1@gmail.com',
        'role' => 'Deputi 6',
        'asdep' => 'Asdep 1',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d6asdep1')]);
    
        \DB::table('users')->insert(
        ['id' => 29,
        'name'=> 'Deputi 6',
        'email' => 'd6asdep2@gmail.com',
        'role' => 'Deputi 6',
        'asdep' => 'Asdep 2',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d6asdep2')]);
    
        \DB::table('users')->insert(
        ['id' => 30,
        'name'=> 'Deputi 6',
        'email' => 'd6asdep3@gmail.com',
        'role' => 'Deputi 6',
        'asdep' => 'Asdep 3',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d6asdep3')]);
    
        \DB::table('users')->insert(
        ['id' => 31,
        'name'=> 'Deputi 6',
        'email' => 'd6asdep4@gmail.com',
        'role' => 'Deputi 6',
        'asdep' => 'Asdep 4',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d6asdep4')]);
    
        \DB::table('users')->insert(
        ['id' => 32,
        'name'=> 'Deputi 6',
        'email' => 'd6asdep5@gmail.com',
        'role' => 'Deputi 6',
        'asdep' => 'Asdep 5',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d6asdep5')]);

        \DB::table('users')->insert(
        ['id' => 33,
        'name'=> 'Pemimpin',
        'email' => 'pemimpin@gmail.com',
        'role' => 'pemimpin',
        'asdep' => '',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('pemimpin')]);

        \DB::table('users')->insert(
        ['id' => 34,
        'name'=> 'Menko Marves',
        'email' => 'menkomarves@gmail.com',
        'role' => 'menkomarves',
        'asdep' => '',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('menkomarves')]);

        \DB::table('users')->insert(
        ['id' => 35,
        'name'=> 'Persidangan',
        'email' => 'persidangan@gmail.com',
        'role' => 'persidangan',
        'asdep' => '',
        'status' => 'Active',
        'email_verified_at' => '2021-05-13 09:42:26',
        'password' => Hash::make('d6asdep5')]);
    }
}
