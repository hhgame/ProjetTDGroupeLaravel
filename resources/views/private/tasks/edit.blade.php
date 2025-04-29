@extends('layouts.app')
@section('content')
<div class="container py-5">
    <h1 class="mb-4">Modifier la Tâche</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $task->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Catégorie</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $task->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="due_date" class="form-label">Date limite</label>
            <input type="date" name="due_date" id="due_date" class="form-control" value="{{ $task->due_date }}">
        </div>

        <div class="mb-3">
            <label for="priority" class="form-label">Priorité</label>
            <select name="priority" id="priority" class="form-control" required>
                <option value="low" {{ $task->priority == 'low' ? 'selected' : '' }}>Basse</option>
                <option value="medium" {{ $task->priority == 'medium' ? 'selected' : '' }}>Moyenne</option>
                <option value="high" {{ $task->priority == 'high' ? 'selected' : '' }}>Haute</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Statut</label>
            <select name="status" id="status" class="form-control">
                <option value="todo" {{ $task->status == 'todo' ? 'selected' : '' }}>À faire</option>
                <option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>En cours</option>
                <option value="done" {{ $task->status == 'done' ? 'selected' : '' }}>Terminée</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Sauvegarder</button>
    </form>
</div>
@endsection
