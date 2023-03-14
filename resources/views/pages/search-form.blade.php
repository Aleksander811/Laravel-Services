@extends('main')
@section('content')
    <h1 class="mt-4">Suraskite meistrą</h1>
    @include('_partials/errors')
    <form action="/searchSpecialist" method="post" >
        @csrf
        <div class="form-group m-1">
            <input type="text" name="search" class="form-control" placeholder="įveskite meistro pavardę">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary">Ieškoti</button>
        </div>
    </form>
@endsection