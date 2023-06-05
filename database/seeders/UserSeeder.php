<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama_lengkap'=>'Super Admin',
            'username'=>'superadmin',
            'email'=>'admin@admin.com',
            'foto'=>'',
            'role'=>'admin',
            'password'=>Hash::make('12345678')
        ]);
    }
}
