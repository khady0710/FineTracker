@extends('layouts.base')

@section('title')
    Modifier un revenu
@endsection

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Modifier un revenu</h4>

                <form action="{{ route('revenues.update', $revenue->id) }}" method="POST" class="forms-sample">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="amount">Montant</label>
                        <input type="number" class="form-control" id="amount" name="amount" value="{{ $revenue->amount }}" required placeholder="Montant">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Description">{{ $revenue->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="is_recurrent">Récurrent</label>
                        <select class="form-control" id="is_recurrent" name="is_recurrent">
                            <option value="0" {{ !$revenue->is_recurrent ? 'selected' : '' }}>Non</option>
                            <option value="1" {{ $revenue->is_recurrent ? 'selected' : '' }}>Oui</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="revenue_date">Date du revenu</label>
                        <input type="date" class="form-control" id="revenue_date" name="revenue_date" value="{{ $revenue->revenue_date->format('Y-m-d') }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Mettre à jour</button>
                    <a href="{{ route('revenues.index') }}" class="btn btn-dark">Annuler</a>
                </form>

            </div>
        </div>
    </div>
@endsection
