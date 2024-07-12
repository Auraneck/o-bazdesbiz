<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $farces = Category::where('name', 'Farces et Attrapes')->first();
        $bonbons = Category::where('name', 'Bonbons')->first();
        $jouets = Category::where('name', 'Jouets')->first();
        $electronique = Category::where('name', 'Électronique')->first();
        $firework = Category::where('name', 'Fire work')->first();

        Product::create([
            'name' => 'Coussin péteur',
            'description' => 'Un classique des farces et attrapes.',
            'price' => 4.99,
            'image' => 'coussin_peteur.jpg',
            'category_id' => $farces->id,
        ]);

        Product::create([
            'name' => 'Claque doigt',
            'description' => 'Fais peur à tes amis !',
            'price' => 2.00,
            'image' => 'Claque doigt.jpg',
            'category_id' => $farces->id,
        ]);

        Product::create([
            'name' => 'Bizon (pas vraiment fute)',
            'description' => '"CA VA PETE" a dit un jour un grand homme apres avoir lance une boite de bizon fute.',
            'price' => 14.99,
            'image' => 'BizonFute.jpg',
            'category_id' => $farces->id,
        ]);

        Product::create([
            'name' => 'Spray puant lot complet',
            'description' => 'Cet item legendrere est un artefact utilise jadis par les plus grand hommes pour faire les plus redoutable farfaprank comme par exemple Lee Harvey Oswald (le discret) ou meme Joseph Goebbels qui doit encore payer EDF.',
            'price' => 39.45,
            'image' => 'Spray.jpg',
            'category_id' => $farces->id,
        ]);

        Product::create([
            'name' => 'Bonbons acidulés',
            'description' => 'Des bonbons qui piquent pour les amateurs de sensations fortes.',
            'price' => 2.99,
            'image' => 'bonbons_acidules.jpg',
            'category_id' => $bonbons->id,
        ]);

        Product::create([
            'name' => 'Bonbons croustillant',
            'description' => 'Des bonbons croustillant ??? mais quelle idée.',
            'price' => 0.50,
            'image' => 'Bonbonscroustillant.jpg',
            'category_id' => $bonbons->id,
        ]);

        Product::create([
            'name' => 'Bonbons Bertie Botts Beans',
            'description' => 'Une chance sur 2 de manger un Bonbon Caca ou poubelle, venez tester nos bonbon approuvé par Dumbledore.',
            'price' => 6.50,
            'image' => 'Bonbonscroustillant.jpg',
            'category_id' => $bonbons->id,
        ]);

        Product::create([
            'name' => 'Pomme',
            'description' => 'Tu prends trop de sucre ? testes notre nouveau produit ! Créer a partir de matiere vegetal, notre creation est une revolution dans le domaine agricole.',
            'price' => 8.99,
            'image' => 'Pomme.jpg',
            'category_id' => $bonbons->id,
        ]);

        Product::create([
            'name' => 'Tête brulé',
            'description' => 'Cet article de frapadingue vous propulsera dans les étoiles, à consommer avec moderation pour tout abus parlez en à votre medecin.',
            'price' => 4.99,
            'image' => 'tetebrule.jpg',
            'category_id' => $bonbons->id,
        ]);

        Product::create([
            'name' => 'Robot télécommandé',
            'description' => 'Un jouet amusant pour les enfants.',
            'price' => 29.99,
            'image' => 'robot_telecommande.jpg',
            'category_id' => $jouets->id,
        ]);

        Product::create([
            'name' => 'Robot mixer télécommandé',
            'description' => 'Un jouet amusant pour tous les enfants, pensez a prendre des gants.',
            'price' => 28.99,
            'image' => 'robotmixer.jpg',
            'category_id' => $jouets->id,
        ]);

        Product::create([
            'name' => 'Robot de combat',
            'description' => 'Muni de ca propre ceinture explosive le robot de combat est un joué parfait pour quelques secondes de fun.',
            'price' => 589.00,
            'image' => 'robotcombat.jpg',
            'category_id' => $jouets->id,
        ]);

        Product::create([
            'name' => 'Mini drone',
            'description' => 'Un gadget électronique pour les amateurs de nouvelles technologies.',
            'price' => 49.99,
            'image' => 'mini_drone.jpg',
            'category_id' => $electronique->id,
        ]);

        Product::create([
            'name' => 'Mini drone à tete chercheuse',
            'description' => 'Wow cible ton harceleur d école et cours tres vite aux îles Caïmans.',
            'price' => 49.99,
            'image' => 'mini_drone.jpg',
            'category_id' => $electronique->id,
        ]);
    }
}
    
