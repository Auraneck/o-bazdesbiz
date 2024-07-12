<!-- resources/views/partials/admin_navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('admin.index') }}">Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="adminNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.products.index') }}">Gérer les Produits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.orders.index') }}">Gérer les Commandes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Retour à l'Accueil</a>
            </li>
        </ul>
    </div>
</nav>
