@extends('main')
@section('content')
    <h1 class="mt-4">Pridėti servisą</h1>
    @include('_partials/errors')
    <form action="/storeService" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-1">
            <input type="text" name="name" class="form-control" placeholder="Serviso pavadinimas">
        </div>
        <div class="form-group m-1">
            <input type="text" name="adress" class="form-control" placeholder="Serviso adresas">
        </div>
        <div class="form-group m-1">
            <input type="text" name="boss" class="form-control" placeholder="Serviso vadovas">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary">Saugoti</button>
        </div>
    </form>
@endsection