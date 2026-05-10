<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'title' => 'Importancia del Mantenimiento Preventivo de PC',
                'content' => 'Realizar mantenimiento cada 6 meses a tu equipo de trabajo previene la pérdida de datos y mejora el rendimiento general del hardware.',
                'author' => 'Yannick',
                'category' => 'Hardware',
                'published_date' => '2026-04-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Novedades en Desarrollo Frontend',
                'content' => 'Las nuevas tendencias en interfaces buscan hacer sitios más rápidos y accesibles usando HTML semántico y frameworks modernos.',
                'author' => 'Yannick',
                'category' => 'Programación',
                'published_date' => '2026-04-12',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}