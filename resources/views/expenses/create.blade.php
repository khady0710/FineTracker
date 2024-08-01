@extends('layouts.base')

@section('title')
    Ajouter une dépense
@endsection

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ajouter une dépense</h4>

                <form action="{{ route('expenses.store') }}" method="POST" class="forms-sample">
                    @csrf

                    <div class="form-group">
                        <label for="category_id">Catégorie</label>
                        <select class="form-control" id="category_id" name="category_id" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="amount">Montant</label>
                        <input type="number" class="form-control" id="amount" name="amount" required placeholder="Montant">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="is_recurrent">Récurrent</label>
                        <select class="form-control" id="is_recurrent" name="is_recurrent">
                            <option value="0">Non</option>
                            <option value="1">Oui</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="expense_date">Date de la dépense</label>
                        <input type="date" class="form-control" id="expense_date" name="expense_date" required>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Soumettre</button>
                    <a href="{{ route('expenses.index') }}" class="btn btn-dark">Annuler</a>
                </form>
            </div>
        </div>
    </div>
@endsection
