@extends('layouts.base')

@section('title')
    Détails de la Dépense
@endsection

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Détails de la Dépense</h4>

                <div class="form-group">
                    <label>Catégorie :</label>
                    <p>{{ $expense->category->name }}</p>
                </div>
                <div class="form-group">
                    <label>Montant :</label>
                    <p>{{ $expense->amount }}</p>
                </div>
                <div class="form-group">
                    <label>Description :</label>
                    <p>{{ $expense->description }}</p>
                </div>
                <div class="form-group">
                    <label>Récurrent :</label>
                    <p>{{ $expense->is_recurrent ? 'Oui' : 'Non' }}</p>
                </div>
                <div class="form-group">
                    <label>Date de Dépense :</label>
                    <p>{{ $expense->expense_date->format('d/m/Y') }}</p>
                </div>
                <a href="{{ route('expenses.index') }}" class="btn btn-secondary">Retour</a>
            </div>
        </div>
    </div>
@endsection
