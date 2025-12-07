@extends('layout.template_form')

@section('title','Formulaire tdo')
@section('title_content','Formulaire save')

@section('content')

<form method="POST" action="{{ route('send_todo') }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" type="text" name="libelle">
                <span class="form-label text-black">Task</span>
            </div>
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
