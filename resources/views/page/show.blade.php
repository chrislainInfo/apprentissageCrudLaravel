@extends('layout.template_form')

@section('title','Mise a jour de la tache'.$data->libelle)
@section('title_content')
    Souhaitez-vous supprimer la tache <span class="text-success">{{$data->libelle}}</span> ?
@endsection

@section('content')

<a class="btn btn-danger" href="{{ route('liste.delete', $data->id) }}">Oui get</a>
<a class="btn btn-success" href="{{ route('listes') }}">Non</a>


<form method="POST" action="{{  route('liste.delete', $data->id) }}">
    @csrf
   
    <div class="form-btn">
        <button class="submit-btn">Oui avec post</button>
    </div>
</form>
@endsection
