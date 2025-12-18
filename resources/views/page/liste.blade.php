@extends('layout.template_form')

@section('title','Formulaire tdo')
@section('title_content','Table ')

@section('content')
@if (session('error'))
   <h2 class='text-danger'>{{ session('error') }}</h2> 
@endif

<h1>Liste des données</h1>
 @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>tache</th>
        </tr>
    </thead>
    <tbody>
        @foreach($donnee as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->libelle }}</td>
                <td>
                    <a href="{{ route('liste.edit', $item->id) }}" class="btn btn-warning" target="_blank">Modifier</a>
                    <a href="{{ route('liste.show', $item->id) }}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<a href="{{ route('listes') }}">
    Return
</a>

@endsection
