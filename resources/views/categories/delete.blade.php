@extends('layouts.base')

@section('title')
    Supprimer une catégorie
@endsection

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Confirmer la suppression</h4>

                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <p>Êtes-vous sûr de vouloir supprimer la catégorie "{{ $category->name }}" ?</p>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </div>
@endsection
