@extends('layouts.base')

@section('title')
    Supprimer une dépense
@endsection

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Confirmer la suppression</h4>

                <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <p>Êtes-vous sûr de vouloir supprimer la dépense "{{ $expense->name }}" ?</p>
                    <p>Montant: {{ number_format($expense->amount, 2) }} USD</p>
                    <p>Description: {{ $expense->description }}</p>
                    <p>Date: {{ $expense->expense_date->format('d/m/Y') }}</p>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                    <a href="{{ route('expenses.index') }}" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </div>
@endsection
