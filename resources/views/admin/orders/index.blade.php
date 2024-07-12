@extends('layouts.admin')

@section('title', 'Gestion des Commandes')

@section('content')
<div class="container mt-4">
    <h1>Gestion des Commandes</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Code Postal</th>
                <th>Gérée</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->postal_code }}</td>
                    <td>{{ $order->handled ? 'Oui' : 'Non' }}</td>
                    <td>
                        <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-info">Voir</a>
                        @if($order->handled)
                            <span>Commande traitée</span>
                        @else
                            <form action="{{ route('admin.orders.update', $order) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="handled" value="1">
                                <button type="submit" class="btn btn-warning">Marquer comme gérée</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
