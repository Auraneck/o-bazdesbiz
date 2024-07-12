<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
   
    public function run()
    {
        Category::create([
            'name' => 'Farces et Attrapes',
            'description' => 'Les meilleures blagues et accessoires pour rire.',
        ]);

        Category::create([
            'name' => 'Bonbons',
            'description' => 'Un large choix de bonbons pour tous les goûts.',
        ]);

        Category::create([
            'name' => 'Jouets',
            'description' => 'Des jouets pour tous les âges.',
        ]);

        Category::create([
            'name' => 'Électronique',
            'description' => 'Gadgets et appareils électroniques en tout genre.',
        ]);
    }
}
