<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <- ¡Esta es la línea mágica que soluciona el error!

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'title' => 'Mantenimiento de PC',
                'description' => 'Limpieza y optimización.',
                'price' => 15000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Desarrollo Frontend',
                'description' => 'Sitios modernos con Bootstrap.',
                'price' => 50000,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}