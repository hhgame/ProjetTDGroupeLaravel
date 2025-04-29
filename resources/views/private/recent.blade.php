@extends('layouts.app')
@section('title', 'Activité récente')
@section('content')
<div class="container py-4">
    <h1 class="mb-4">Activité récente</h1>
    @if($activities->isEmpty())
        <p>Aucune activité récente enregistrée.</p>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Titre de la tâche</th>
                        <th>Action</th>
                        <th>Date et heure</th>
                        <th>Nouveau statut (si applicable)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($activities as $activity)
                        <tr>
                            <td>{{ $activity->task_title }}</td>
                            <td>{{ $activity->action }}</td>
                            <td>{{ $activity->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                {{ $activity->new_status ?? '-' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection