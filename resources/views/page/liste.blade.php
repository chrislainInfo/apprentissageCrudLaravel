@extends('layout.template_form')

@section('title','Formulaire tdo')
@section('title_content','Table ')

@section('content')
@if (session('error'))
   <h2 class='text-danger'>{{ session('error') }}</h2> 
@endif

<h1>Liste des données</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>tache</th>
        </tr>
    </thead>
    <tbody>
        @foreach($donnes as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->libelle }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


<a href="{{ route('listes') }}">
    Return
</a>

@endsection
