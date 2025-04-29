@extends('layouts.app')
@section('title', 'Dashboard - TaskFlow')
@section('content')
<div class="container py-4">
    <h1 class="mb-4">Tableau de bord</h1>
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-body">
                    <h5 class="card-title">Tâches à faire aujourd’hui</h5>
                    <p class="display-6 text-primary">{{ $tasksToday }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-danger">
                <div class="card-body">
                    <h5 class="card-title">Tâches en retard</h5>
                    <p class="display-6 text-danger">{{ $tasksLate }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-success">
                <div class="card-body">
                    <h5 class="card-title">Progression globale</h5>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar"
                             style="width: {{ $progress }}%;" aria-valuenow="{{ $progress }}"
                             aria-valuemin="0" aria-valuemax="100">
                            {{ $progress }}%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('tasks.index') }}" class="btn btn-primary">
        Voir mes tâches
    </a>
</div>
@endsection