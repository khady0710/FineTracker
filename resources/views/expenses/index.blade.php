
@extends('layouts.base')

@section('title')
    Liste des Dépenses
@endsection

@section('content')
    <div class="card-body">
        <div class="template-demo">
            <a href="{{ route('expenses.create') }}">
                <button type="button" class="btn btn-primary btn-rounded btn-fw">Ajouter</button>
            </a>
        </div>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Dépenses</h4>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Catégorie</th>
                            <th>Montant</th>
                            <th>Description</th>
                            <th>Récurrent</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($expenses as $expense)
                            <tr>
                                <td>{{ $expense->id }}</td>
                                <td>{{ $expense->category->name }}</td>
                                <td>{{ $expense->amount }}</td>
                                <td>{{ $expense->description }}</td>
                                <td>{{ $expense->is_recurrent ? 'Oui' : 'Non' }}</td>
                                <td>{{ $expense->expense_date->format('d/m/Y') }}</td> <!-- Assurez-vous que expense_date est un objet date -->
                                <td>
                                    <a href="{{ route('expenses.show', $expense->id) }}" class="btn btn-sm btn-info">Afficher</a>
                                    <a href="{{ route('expenses.edit', $expense->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                                    <!-- Formulaire pour supprimer une dépense -->
                                    <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
