@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Mes Tâches</h1>

    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Créer une tâche</a>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Catégorie</th>
                    <th>Priorité</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->category->name }}</td>
                        <td>{{ ucfirst($task->priority) }}</td>
                        <td>{{ ucfirst($task->status) }}</td>
                        <td>
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
