@extends('layouts.app')
@section('title', 'Bienvenue sur TaskFlow')
@section('content')
<div class="container-fluid p-0">
    <!-- Hero Section -->
    <section class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Organisez vos tâches facilement avec TaskFlow</h1>
            <p class="lead">Votre espace personnel pour gérer votre productivité.</p>
            <div class="mt-4">
                <a href="{{ route('register') }}" class="btn btn-light me-2">S'inscrire</a>
                <a href="{{ route('login') }}" class="btn btn-outline-light">Se connecter</a>
            </div>
        </div>
    </section>
    <!-- Présentation -->
    <section class="py-5 bg-light text-center">
        <div class="container">
            <h2 class="mb-4">Pourquoi TaskFlow ?</h2>
            <p class="fs-5">Créez, suivez et organisez vos tâches quotidiennes efficacement.</p>
        </div>
    </section>
    <!-- Fonctionnalités clés -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 class="mb-5">Fonctionnalités clés</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <i class="fas fa-check-circle fa-2x text-primary mb-2"></i>
                    <h5>Gestion de tâches simple</h5>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-tasks fa-2x text-success mb-2"></i>
                    <h5>Statut de progression</h5>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-flag fa-2x text-warning mb-2"></i>
                    <h5>Suivi par priorité</h5>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-tags fa-2x text-info mb-2"></i>
                    <h5>Catégorisation</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Équipe -->
    <section class="py-5 bg-light text-center">
        <div class="container">
            <h2 class="mb-5">Notre Équipe</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/dev1.jpg') }}" alt="Développeur 1" class="card-img-top rounded-circle mx-auto mt-4" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Jean Dupont</h5>
                            <p class="card-text">Développeur Full Stack</p>
                        </div>
                    </div>
                </div>
                <!-- Ajoute d'autres membres ici -->
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-1">&copy; {{ date('Y') }} TaskFlow. Tous droits réservés.</p>
            <a href="{{ route('about') }}" class="text-white me-3">À propos</a>
            <a href="{{ route('contact') }}" class="text-white">Contact</a>
        </div>
    </footer>
</div>
@endsection