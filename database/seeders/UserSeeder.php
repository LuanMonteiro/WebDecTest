<?php

namespace Database\Seeders;

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
        \App\Models\User::create([
             'name' => 'admin',
             'email' => 'admin@webdec.com.br',
             'password' => Hash::make('123'),
             'email_verified_at' => now()
        ]);
    }
}
