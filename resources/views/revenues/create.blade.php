@extends('layouts.base')

@section('title')
    Ajouter un revenu
@endsection

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ajouter un revenu</h4>

                <form action="{{ route('revenues.store') }}" method="POST" class="forms-sample">
                    @csrf
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
                        <label for="revenue_date">Date du revenu</label>
                        <input type="date" class="form-control" id="revenue_date" name="revenue_date" required>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Soumettre</button>
                    <a href="{{ route('revenues.index') }}" class="btn btn-dark">Annuler</a>
                </form>
            </div>
        </div>
    </div>
@endsection
