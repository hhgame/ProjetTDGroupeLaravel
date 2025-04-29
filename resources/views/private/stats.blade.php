@extends('layouts.app')
@section('title', 'Statistiques par catégorie')
@section('content')
<div class="container py-4">
    <h1 class="mb-4">Statistiques par catégorie</h1>
    @if($stats->isEmpty())
        <p>Vous n'avez encore aucune tâche ou catégorie enregistrée.</p>
    @else
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Catégorie</th>
                        <th>Nombre total de tâches</th>
                        <th>% de tâches terminées</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stats as $stat)
                        <tr>
                            <td>{{ $stat->name }}</td>
                            <td>{{ $stat->total_tasks }}</td>
                            <td>{{ $stat->completion_rate }}%</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection