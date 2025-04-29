@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Activité récente</h1>

    @if($activities->isEmpty())
        <p>Aucune activité récente.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Titre de la tâche</th>
                    <th>Date et heure de l'action</th>
                    <th>Status actuel</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activities as $activity)
                    <tr>
                        <td>{{ $activity['title'] }}</td>
                        <td>{{ $activity['updated_at']->format('d/m/Y H:i:s') }}</td>
                        <td>{{ ucfirst($activity['status']) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
