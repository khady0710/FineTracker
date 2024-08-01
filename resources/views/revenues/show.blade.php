@extends('layouts.base')

@section('title')
    Détails du revenu
@endsection

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Détails du revenu</h4>
                <div class="form-group">
                    <label>Montant :</label>
                    <p>{{ $revenue->amount }}</p>
                </div>
                <div class="form-group">
                    <label>Description :</label>
                    <p>{{ $revenue->description }}</p>
                </div>
                <div class="form-group">
                    <label>Récurrent :</label>
                    <p>{{ $revenue->is_recurrent ? 'Oui' : 'Non' }}</p>
                </div>
                <div class="form-group">
                    <label>Date du revenu :</label>
                    <p>{{ $revenue->revenue_date->format('d/m/Y') }}</p>
                </div>
                <a href="{{ route('revenues.index') }}" class="btn btn-secondary">Retour</a>
            </div>
        </div>
    </div>
@endsection
