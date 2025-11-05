<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            "name" => "ALEXANDRE DE ALMEIDA NASCIMENTO",
            "email" => 'alexandrealmeidanascimento@gmail.com',
            "password" => Hash::make('aleana@123'),
        ];

        DB::table('users')->insert($data);
    }
}
