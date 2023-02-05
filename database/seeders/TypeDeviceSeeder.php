<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeDevice;

class TypeDeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Laptop',
            'Desktop',
            'Tablet',
            'Smartphone'
        ];

        foreach ($types as $type) {
            TypeDevice::create([
                'name' => $type
            ]);
        }

    }
}
