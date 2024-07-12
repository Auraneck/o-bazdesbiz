@extends('layouts.app')

@section('title', $product->name)

@section('content')
<header>
    <h1>{{ $product->name }}</h1>
    <a href="{{ route('categories.show', $product->category->id) }}" class="btn btn-secondary">Retour à la catégorie</a>
</header>
<section class="mt-4">
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="{{ asset('https://via.placeholder.com/800x600.png/E67A5B/FFFFFF?text=' . $product->name) }}" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <h2>Détails du Produit</h2>
            <p><strong>Description :</strong> {{ $product->description }}</p>
            <p><strong>Prix :</strong> {{ $product->price }} €</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button" onclick="decrementQuantity()">-</button>
                </div>
                <input type="text" class="form-control" id="quantity" value="1" readonly>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" onclick="incrementQuantity()">+</button>
                </div>
            </div>
            <button class="btn btn-success" onclick="addToCart({{ $product->id }})">Ajouter au panier</button>
        </div>
    </div>
</section>

<script>
    function incrementQuantity() {
        var quantity = document.getElementById('quantity').value;
        document.getElementById('quantity').value = parseInt(quantity) + 1;
    }

    function decrementQuantity() {
        var quantity = document.getElementById('quantity').value;
        if (quantity > 1) {
            document.getElementById('quantity').value = parseInt(quantity) - 1;
        }
    }

    function addToCart(productId) {
        var quantity = document.getElementById('quantity').value;
        window.location.href = "/cart/add/" + productId + "/" + quantity;
    }
</script>
@endsection
