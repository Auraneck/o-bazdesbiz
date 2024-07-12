<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $products = Product::all();
        if ($products->count() < 4) {
            $products = Product::factory()->count(4 - $products->count())->create()->merge($products);
        }

        Order::create([
            'name' => 'Jean Dupont',
            'email' => 'jean.dupont@example.com',
            'address' => '123 rue Exemple, Paris',
            'postal_code' => '75001',
            'card_number' => '1234-5678-1234-5678',
            'cvc' => '123',
            'handled' => false
        ])->products()->attach($products->pluck('id')->random(), [
            'quantity' => 2,
            'price' => 19.99
        ]);

        Order::create([
            'name' => 'Marie Durand',
            'email' => 'marie.durand@example.com',
            'address' => '456 avenue Exemple, Lyon',
            'postal_code' => '69001',
            'card_number' => '2345-6789-2345-6789',
            'cvc' => '456',
            'handled' => true
        ])->products()->attach($products->pluck('id')->random(), [
            'quantity' => 1,
            'price' => 29.99
        ]);

        Order::create([
            'name' => 'Luc Martin',
            'email' => 'luc.martin@example.com',
            'address' => '789 boulevard Exemple, Marseille',
            'postal_code' => '13001',
            'card_number' => '3456-7890-3456-7890',
            'cvc' => '789',
            'handled' => false
        ])->products()->attach($products->pluck('id')->random(), [
            'quantity' => 3,
            'price' => 9.99
        ]);
    }
}
