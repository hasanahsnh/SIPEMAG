<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Hasanah',
            'username' => 'S01',
            'password' => bcrypt('s01Hasanah'),
            'role' => 'siswa'
        ]);

        User::create([
            'name' => 'Siswa',
            'username' => 'siswa',
            'password' => bcrypt('siswa'),
            'role' => 'siswa'
        ]);
    }
}
