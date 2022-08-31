<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'Caitlyn Jossephine',
            'email' => 'caitlyn@gmail.com',
            'password' => Hash::make('CaitlynTest#123'),
            'role' => 1,
            'picture' => 'dummyFoto.png',
            'class' => 'LF11'
        ]);

        User::create([
            'name' => 'Veronica Srisupeni',
            'email' => 'vero@gmail.com',
            'password' => Hash::make('VeroTest#123'),
            'role' => 1,
            'picture' => 'dummyFoto.png',
            'class' => 'LF11'
        ]);

        User::create([
            'name' => 'Cahyo Purnomo',
            'email' => 'cahyo@gmail.com',
            'password' => Hash::make('CahyoTest#123'),
            'role' => 1,
            'picture' => 'dummyFoto.png',
            'class' => 'LF11'
        ]);

        User::create([
            'name' => 'Prima Abim',
            'email' => 'abim@gmail.com',
            'password' => Hash::make('AbimTest#123'),
            'role' => 1,
            'picture' => 'dummyFoto.png',
            'class' => 'LF11'
        ]);

        User::create([
            'name' => 'Harsono Ojek',
            'email' => 'harsono@gmail.com',
            'password' => Hash::make('HarsonoTest#123'),
            'role' => 1,
            'picture' => 'dummyFoto.png',
            'class' => 'LF11'
        ]);

        User::create([
            'name' => 'Sutopo Raya',
            'email' => 'topo@gmail.com',
            'password' => Hash::make('TopoTest#123'),
            'role' => 1,
            'picture' => 'dummyFoto.png',
            'class' => 'LF11'
        ]);

        \App\Models\User::factory()->count(50)->create();
    }
}
