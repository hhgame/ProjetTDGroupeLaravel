@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Statistiques par catégorie</h1>

    @if($statistics->isEmpty())
        <p>Aucune catégorie trouvée.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom de la catégorie</th>
                    <th>Total des tâches</th>
                    <th>Tâches terminées</th>
                    <th>Pourcentage de tâches terminées</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($statistics as $stat)
                    <tr>
                        <td>{{ $stat['name'] }}</td>
                        <td>{{ $stat['total_tasks'] }}</td>
                        <td>{{ $stat['completed_tasks'] }}</td>
                        <td>{{ $stat['completion_rate'] }}%</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
    