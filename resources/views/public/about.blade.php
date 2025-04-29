@extends('layouts.app')
@section('title', 'À propos - TaskFlow')
@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">À propos de <span class="text-primary">TaskFlow</span></h1>
        <p class="lead text-muted">L'application web qui vous aide à mieux gérer vos tâches et votre temps au quotidien.</p>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-md-10">
            <h2 class="h4 fw-semibold">Pourquoi TaskFlow ?</h2>
            <ul class="list-unstyled mt-3">
                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i><strong>Simplicité d’utilisation</strong> : une interface claire et ergonomique pour une prise en main rapide.</li>
                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i><strong>Organisation personnalisée</strong> : tâches catégorisées, statuts et priorités à votre image.</li>
                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i><strong>100 % privé</strong> : chaque utilisateur accède uniquement à ses données, en toute sécurité.</li>
                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i><strong>Responsive design</strong> : votre espace personnel accessible sur tous vos appareils.</li>
                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i><strong>Esthétique moderne</strong> : design épuré avec Bootstrap 5 et FontAwesome.</li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center mb-4">
        <div class="col-md-10">
            <h2 class="h4 fw-semibold">Objectifs du projet</h2>
            <p class="mt-3">
                TaskFlow est un projet personnel développé dans le but d’améliorer la productivité individuelle grâce à une gestion claire et structurée des tâches. 
                Il vise également à démontrer la maîtrise des technologies modernes comme <strong>Laravel 10</strong>, <strong>MySQL</strong>, <strong>Bootstrap</strong>, tout en respectant les bonnes pratiques de développement web.
            </p>
            <p>
                L’application propose une expérience fluide, esthétique et sécurisée, conçue pour évoluer facilement selon les besoins.
            </p>
        </div>
    </div>
    <div class="text-center">
        <a href=" " class="btn btn-outline-primary mt-3">
            <i class="fas fa-arrow-left me-2"></i>Retour à l'accueil
        </a>
    </div>
</div>
@endsection