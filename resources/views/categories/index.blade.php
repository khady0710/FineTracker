@extends('layouts.base')

@section('title')
Catégories
@endsection

@section('content')
    <div class="card-body">
        <div class="template-demo">
            <a href="{{route ('categories.create')}}">
                <button type="button" class="btn btn-primary btn-rounded btn-fw">Ajouter</button>
            </a>
        </div>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Catégories</h4>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th> # </th>
                            <th> Nom </th>
                            <th> Actions </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-info">Show</a>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                    <!-- Formulaire pour supprimer une catégorie -->
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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

<div class="card-body">
    <div class="template-demo">
        <a href="{{route ('categories.create')}}">
            <button type="button" class="btn btn-primary btn-rounded btn-fw">Ajouter</button>
        </a>
    </div>
</div>
