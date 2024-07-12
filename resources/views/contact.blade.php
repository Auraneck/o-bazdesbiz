@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<header>
    <h1>Contactez-nous</h1>
</header>
<section class="mt-4">
    <form>
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" placeholder="Votre nom">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Votre email">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Votre message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</section>
@endsection
