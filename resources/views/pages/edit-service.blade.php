@extends('main')
@section('content')
    <h1 class="mt-4">Redaguoti servisą</h1>
    @include('_partials/errors')
    <form action="/service/update/{{$service->id}}" method="post" >
        @csrf
        <div class="form-group m-1">
            <input type="text" name="name" class="form-control" placeholder="Serviso pavadinimas" value="{{$service->name}}">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary">Saugoti</button>
        </div>
    </form>
@endsection