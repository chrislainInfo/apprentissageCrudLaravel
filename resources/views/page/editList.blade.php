@extends('layout.template_form')

@section('title','Mise a jour de la tache'.$data->libelle)
@section('title_content')
    Formulaire de mis a jour de la tache <span class="text-success">{{$data->libelle}}</span>
@endsection

@section('content')

<form method="POST" action="{{ route('liste.edit', $data->id) }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            
            <div class="form-group">
                <input class="form-control" type="text" name="libelle" value="{{$data->libelle}}">
                <input class="form-control" type="text" name="description" value="{{$data->description}}">
                <span class="form-label text-black">Task</span>
            </div>
            @error('libelle')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-btn">
        <button class="submit-btn">Submit</button>
    </div>
</form>
<a href="{{ route('listes') }}">
    Voir Liste
</a>

@endsection
