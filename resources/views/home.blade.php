@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://via.placeholder.com/800x300/3BE0B3?text=Promotions" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://via.placeholder.com/800x300/DA4D2F?text=Offres+Spécials" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://via.placeholder.com/800x300/6C42F0?text=Produits+les+plus+vendus" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="mt-4">
    <h2>Catégories de Produits</h2>
    @foreach($categories as $category)
        <div class="mb-4">
            <h3>{{ $category->name }}</h3>
            <div class="row">
                @foreach($category->products as $product)
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('https://via.placeholder.com/800x600.png/E67A5B/FFFFFF?text=' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->price }} €</p>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Voir les détails</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-secondary">Voir plus</a>
        </div>
    @endforeach
</section>
@endsection
