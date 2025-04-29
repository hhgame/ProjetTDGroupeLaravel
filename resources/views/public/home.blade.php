@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center">
        <h1 class="display-4">Organisez vos tâches facilement avec TaskFlow</h1>
        <p class="lead">Votre espace personnel pour gérer votre productivité.</p>
        <a href="{{ route('register') }}" class="btn btn-primary m-2">S'inscrire</a>
        <a href="{{ route('login') }}" class="btn btn-outline-secondary m-2">Se connecter</a>
    </div>

    <hr class="my-5">

    <section class="my-5">
        <h2>Présentation</h2>
        <p>Créez, suivez et organisez vos tâches quotidiennes efficacement.</p>
    </section>

    <section class="my-5">
        <h2>Équipe</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="https://via.placeholder.com/100" class="card-img-top rounded-circle mx-auto mt-3" style="width:100px;" alt="Dev">
                    <div class="card-body">
                        <h5 class="card-title">Jean Dupont</h5>
                        <p class="card-text">Développeur Laravel</p>
                    </div>
                </div>
            </div>
            <!-- Ajoute d'autres développeurs ici -->
        </div>
    </section>

    <section class="my-5">
        <h2>Fonctionnalités clés</h2>
        <ul class="list-unstyled">
            <li>• Gestion de tâches simple</li>
            <li>• Statut de progression</li>
            <li>• Suivi par priorité</li>
            <li>• Catégorisation</li>
        </ul>
    </section>
</div>
@endsection
