@extends('layout.template_form')

@section('title','Formulaire tdo')
@section('title_content','Table ')

@section('content')
@if (session('error'))
   <h2 class='text-danger'>{{ session('error') }}</h2> 
@endif

<a href="{{ route('listes') }}">
    Return
</a>

@endsection
