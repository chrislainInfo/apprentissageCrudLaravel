@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<form method="POST" action="{{ route('listes') }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" type="text" name="password">
                <span class="form-label text-black">Task</span>
            </div>
        </div>
    </div>
    <div class="form-btn">
        <button class="submit-btn">Submit</button>
    </div>
</form>