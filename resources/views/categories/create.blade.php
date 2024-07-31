@extends('layouts.base')

@section('title')
    Ajouter une catégorie
@endsection

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ajouter une catégorie</h4>

                <form action="{{ route('categories.store') }}" method="POST" class="forms-sample">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Nom">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="button" class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
