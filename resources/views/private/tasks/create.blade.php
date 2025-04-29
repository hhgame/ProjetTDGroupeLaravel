@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Créer une Tâche</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Catégorie</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="">Aucune</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="due_date" class="form-label">Date limite</label>
            <input type="date" name="due_date" id="due_date" class="form-control">
        </div>

        <div class="mb-3">
            <label for="priority" class="form-label">Priorité</label>
            <select name="priority" id="priority" class="form-control" required>
                <option value="low">Basse</option>
                <option value="medium">Moyenne</option>
                <option value="high">Haute</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Créer la tâche</button>
    </form>
</div>
@endsection
