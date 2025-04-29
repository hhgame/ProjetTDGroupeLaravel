@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Créer une Catégorie</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nom de la catégorie</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Créer la catégorie</button>
    </form>
</div>
@endsection
