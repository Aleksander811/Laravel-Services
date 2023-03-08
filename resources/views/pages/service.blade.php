@extends('main')
@section('content')
    <div class="card mt-5">
      <h1>{{$service->name}}</h1>
        <div class="row">
            @foreach($service->specialists as $specialist)
                <div class="card">
                    <ul>
                        <li>Meistras:{{$specialist->name}}</li>
                        <li>Specializacija:{{$specialist->specialization}}</li>
                        <li>{{$specialist->city}}</li>
                        <li><a href="/specialist/{{$specialist->id}}">Plačiau...</a></li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection