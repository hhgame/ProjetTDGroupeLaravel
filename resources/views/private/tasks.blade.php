@extends('layouts.app')
@section('title', 'Créer une tâche')
@section('content')
<div class="container py-4">
    <h1>Créer une nouvelle tâche</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Titre *</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Catégorie</label>
            <select name="category_id" class="form-select">
                <option value="">Aucune</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Date limite</label>
            <input type="date" name="due_date" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Priorité *</label>
            <select name="priority" class="form-select" required>
                <option value="low">Basse</option>
                <option value="medium">Moyenne</option>
                <option value="high">Haute</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Créer la tâche</button>
    </form>
</div>
@endsection