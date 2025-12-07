@extends('layout.template_form')

@section('title','Formulaire tdo')
@section('title_content','Formulaire save')

@section('content')
@if (session('error'))
   <h2 class='text-danger'>{{ session('error') }}</h2> 
@endif
<form method="POST" action="{{ route('listes') }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" name="password" type="text">
                <span class="form-label text-black">Password</span>
            </div>
        </div>
    </div>
    <div class="form-btn">
        <button class="submit-btn">Submit</button>
    </div>
</form>
<a href="{{ route('listes') }}">
    Return
</a>

@endsection
