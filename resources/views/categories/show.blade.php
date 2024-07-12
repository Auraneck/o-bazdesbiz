@extends('layouts.app')

@section('title', $category->name)

@section('content')
<header>
    <h1>{{ $category->name }}</h1>
    <a href="{{ route('home') }}" class="btn btn-secondary">Retour à l'accueil</a>
</header>
<section class="mt-4">
    <h2>Produits dans la catégorie {{ $category->name }}</h2>
    <div class="row">
        @foreach($category->products as $product)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('https://via.placeholder.com/800x600.png/E67A5B/FFFFFF?text=' . $product->name) }}" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->price }} €</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
