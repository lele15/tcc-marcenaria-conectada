<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FabricanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name" => "ALEXANDRE DE ALMEIDA NASCIMENTO",
                "cnpj" => "12.345.698/0001-98",
                "instagram" => '@ale_moveis_rusticos',
                "whatsapp" => '55(41)99182-2190',
                "user_id"=> 1,
            ],
        ];

        DB::table('fabricantes')->insert($data);
    }
}
