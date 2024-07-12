@extends('layouts.app')

@section('title', 'Produits')

@section('content')
<header class="mb-4">
    <h1>Tous les Produits</h1>
</header>
<section>
    @foreach($categories as $category)
        <h2 class="mb-3">{{ $category->name }}</h2>
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
    @endforeach
</section>
@endsection
