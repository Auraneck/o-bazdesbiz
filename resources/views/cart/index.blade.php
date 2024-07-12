@extends('layouts.app')

@section('title', 'Panier')

@section('content')
<header>
    <h1>Votre Panier</h1>
</header>
<section class="mt-4">
    @if(session('cart'))
        <table class="table">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Quantité</th>
                    <th>Prix</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                @foreach(session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                    <tr>
                        <td><img src="{{ asset('https://via.placeholder.com/100x100.png/E67A5B/FFFFFF?text=' . $details['name'])}}" width="50" height="50" alt="{{ $details['name'] }}"></td>
                        <td>{{ $details['name'] }}</td>
                        <td>
                            <form action="{{ url('/cart/update/'.$id) }}" method="POST">
                                @csrf
                                <input type="number" name="quantity" value="{{ $details['quantity'] }}" min="1" class="form-control w-25 d-inline">
                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                            </form>
                        </td>
                        <td>{{ $details['price'] * $details['quantity'] }} €</td>
                        <td>
                            <a href="{{ url('/cart/remove/'.$id) }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-right">
            <h3>Total: {{ $total }} €</h3>
            <button class="btn btn-success" data-toggle="modal" data-target="#checkoutModal">Valider ma commande</button>
        </div>
    @else
        <p>Votre panier est vide.</p>
    @endif
</section>

<!-- Modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="checkoutForm" action="{{ url('/cart/checkout') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="checkoutModalLabel">Valider ma commande</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="errorMessages" class="alert alert-danger d-none"></div>
                    <div class="form-group">
                        <label for="name">Nom du titulaire de compte</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Adresse</label>
                        <input type="text" name="address" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Code postal</label>
                        <input type="text" name="postal_code" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="card_number">Numéro de carte bancaire</label>
                        <input type="text" name="card_number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="cvc">Numéro CVC</label>
                        <input type="text" name="cvc" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.getElementById('checkoutForm').addEventListener('submit', function(e) {
    e.preventDefault();

    let form = e.target;
    let formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.errors) {
            let errorMessages = document.getElementById('errorMessages');
            errorMessages.innerHTML = '';
            errorMessages.classList.remove('d-none');

            for (let key in data.errors) {
                let error = document.createElement('div');
                error.textContent = data.errors[key][0];
                errorMessages.appendChild(error);
            }
        } else if (data.success) {
            $('#checkoutModal').modal('hide');
            window.location.href = "{{ route('home') }}";
        }
    })
    .catch(error => console.error('Error:', error));
});
</script>
@endsection
