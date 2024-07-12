@extends('layouts.admin')

@section('title', 'Détail de la Commande')

@section('content')
<div class="container mt-4">
    <h1>Détail de la Commande #{{ $order->id }}</h1>
    <p><strong>Nom :</strong> {{ $order->name }}</p>
    <p><strong>Email :</strong> {{ $order->email }}</p>
    <p><strong>Adresse :</strong> {{ $order->address }}</p>
    <p><strong>Code Postal :</strong> {{ $order->postal_code }}</p>
    <p><strong>Numéro de carte :</strong> {{ $order->card_number }}</p>
    <p><strong>CVC :</strong> {{ $order->cvc }}</p>
    <h2>Produits commandés</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nom du Produit</th>
                <th>Quantité</th>
                <th>Prix Unitaire</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->pivot->quantity }}</td>
                    <td>{{ $product->pivot->price }} €</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p><strong>Total :</strong> {{ $order->products->sum(function($product) {
        return $product->pivot->quantity * $product->pivot->price;
    }) }} €</p>
</div>
@endsection
