@extends('layouts.base')

@section('title')
    Revenus
@endsection

@section('content')
    <div class="card-body">
        <div class="template-demo">
            <a href="{{ route('revenues.create') }}">
                <button type="button" class="btn btn-primary btn-rounded btn-fw">Ajouter</button>
            </a>
        </div>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Revenus</h4>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th> # </th>
                            <th> Montant </th>
                            <th> Description </th>
                            <th> Récurent </th>
                            <th> Date </th>
                            <th> Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($revenues as $revenue)
                            <tr>
                                <td>{{ $revenue->id }}</td>
                                <td>{{ number_format($revenue->amount, 2) }} F CFA</td>
                                <td>{{ $revenue->description }}</td>
                                <td>{{ $revenue->is_recurrent ? 'Oui' : 'Non' }}</td>
                                <td>{{ \Carbon\Carbon::parse($revenue->revenue_date)->format('d/m/Y') }}</td>

                                <td>
                                    <a href="{{ route('revenues.show', $revenue->id) }}" class="btn btn-sm btn-info">Afficher</a>
                                    <a href="{{ route('revenues.edit', $revenue->id) }}" class="btn btn-sm btn-warning">Modifier</a>

                                    <!-- Formulaire pour supprimer un revenu -->
                                    <form action="{{ route('revenues.destroy', $revenue->id) }}" method="POST" style="display:inline;">
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
