<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow - @yield('title', 'Application de gestion de tâches')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Styles personnalisés -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
        }
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
        }
    </style>
</head>
<body>

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">TaskFlow</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-chart-line"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tasks.index') }}"><i class="fas fa-tasks"></i> Mes Tâches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categories.index') }}"><i class="fas fa-tags"></i> Catégories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('statistics.index') }}"><i class="fas fa-chart-pie"></i> Statistiques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('activity.index') }}"><i class="fas fa-history"></i> Activité</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.edit') }}"><i class="fas fa-user-cog"></i> Profil</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn nav-link text-danger" style="border: none; background: none;" type="submit">
                                    <i class="fas fa-sign-out-alt"></i> Déconnexion
                                </button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> S'inscrire</a>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Pied de page -->
    <footer class="text-center">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} TaskFlow. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
