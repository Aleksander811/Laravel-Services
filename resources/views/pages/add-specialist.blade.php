@extends('main')
@section('content')
    <h1 class="mt-4">Pridėti meistrą</h1>
    @include('_partials/errors')
    <form action="/storeSpecialist" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-1">
            <input type="text" class="form-control" name="name" placeholder="Vardas Pavardė">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="specialization" placeholder="Specializacija">
        </div>
        <div class="form-group m-1">
            <input type="text" name="city" class="form-control" placeholder="Miestas">
        </div>
        <div class="form-group m-1">
            <select name="service" class="form-control">
                <option selected disabled>--Pasirinkite servisą--</option>
                    @foreach($services as $service)
                    <option value="{{$service->id}}">{{$service->name}}</option>
                    @endforeach
            </select>
        </div>
        <div class="div-group m-1">
            <label>Nuotrauka</label>
            <input type="file" name="photo" class="form-control">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary">Saugoti</button>
        </div>
    </form>
@endsection