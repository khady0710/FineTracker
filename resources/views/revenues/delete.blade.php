@extends('layouts.base')

@section('title')
    Supprimer un revenu
@endsection

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Confirmer la suppression</h4>

                <form action="{{ route('revenues.destroy', $revenue->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <p>Êtes-vous sûr de vouloir supprimer le revenu avec les détails suivants :</p>
                    <ul>
                        <li><strong>Montant :</strong> {{ $revenue->amount }}</li>
                        <li><strong>Description :</strong> {{ $revenue->description }}</li>
                        <li><strong>Récurrent :</strong> {{ $revenue->is_recurrent ? 'Oui' : 'Non' }}</li>
                        <li><strong>Date du revenu :</strong> {{ $revenue->revenue_date->format('d/m/Y') }}</li>
                    </ul>
                    <p>Cette action est irréversible.</p>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                    <a href="{{ route('revenues.index') }}" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </div>
@endsection
