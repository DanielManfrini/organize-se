<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PopularFrontSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('popular_fronts')->insert([
            [
                'name' => 'Movimento dos Trabalhadores Rurais Sem Terra',
                'slug' => Str::slug('Movimento dos Trabalhadores Rurais Sem Terra'),
                'acronym' => 'MST',
                'description' => 'Movimento social brasileiro que luta pela reforma agrária e justiça social.',
                'area_of_action' => 'Reforma Agrária',
                'scope' => 'Nacional',
                'country' => 'Brasil',
                'state' => null,
                'city' => null,
                'email' => 'contato@mst.org.br',
                'website' => 'https://mst.org.br',
                'instagram' => 'https://instagram.com/movimentosemterra',
                'facebook' => 'https://facebook.com/movimentosemterra',
                'is_active' => true,
                'is_verified' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'União Nacional dos Estudantes',
                'slug' => Str::slug('União Nacional dos Estudantes'),
                'acronym' => 'UNE',
                'description' => 'Entidade máxima de representação dos estudantes brasileiros.',
                'area_of_action' => 'Educação',
                'scope' => 'Nacional',
                'country' => 'Brasil',
                'state' => null,
                'city' => null,
                'email' => 'contato@une.org.br',
                'website' => 'https://une.org.br',
                'instagram' => 'https://instagram.com/uneoficial',
                'facebook' => 'https://facebook.com/uneoficial',
                'is_active' => true,
                'is_verified' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
