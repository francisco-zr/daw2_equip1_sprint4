<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            'description' => 'Auditorías para empresas',
            'terms' => 'Insertar términos de privacidad',
            'privacy_policy' => 'Insertar política de privacidad',
            'cookies_policy' => 'Insertar política de cookies',
        ]);
    }
}
