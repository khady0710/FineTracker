@extends('layouts.base')

@section('title')
    Détails de la catégorie
@endsection

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Détails de la catégorie</h4>
                <div class="form-group">
                    <label>Nom :</label>
                    <p>{{ $category->name }}</p>
                </div>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour</a>
            </div>
        </div>
    </div>
@endsection
