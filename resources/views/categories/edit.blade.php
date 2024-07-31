@extends('layouts.base')

@section('title')
    Modifier une catégorie
@endsection

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Modifier une catégorie</h4>

                <form action="{{ route('categories.update', $category->id) }}" method="POST" class="forms-sample">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required placeholder="Nom">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Mettre à jour</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-dark">Annuler</a>
                </form>

            </div>
        </div>
    </div>

@endsection
