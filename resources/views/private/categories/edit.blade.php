@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Modifier la Catégorie</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nom de la catégorie</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Sauvegarder</button>
    </form>
</div>
@endsection
