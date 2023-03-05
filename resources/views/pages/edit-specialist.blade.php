@extends('main')
@section('content')
    <h1 class="mt-4">Redaguoti informaciją apie meistrą</h1>
    @include('_partials/errors')
    <form action="/update/{{$specialist->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-1">
            <input type="text" class="form-control" name="name" value="{{$specialist->name}}">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="specialization" value="{{$specialist->specialization}}">
        </div>
        <div class="form-group m-1">
            <input type="text" name="city" class="form-control" value="{{$specialist->city}}">
        </div>
        <div class="form-group m-1">
            <select name="service" class="form-control">
                <option selected disabled>--Pasirinkite servisą--</option>
                <option value="1">27/7 servisas</option>
                <option value="2">Dagas</option>
            </select>
        </div>
        <div class="div-group">
            <label>Nuotrauka</label>
            <input type="file" class="form-control" name="photo">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary">Saugoti</button>
        </div>
    </form>
@endsection