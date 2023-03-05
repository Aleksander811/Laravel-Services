@extends('main')
@section('content')
    <h1 class="mt-4">Servisų meistrai</h1>
        <div class="row">
            @foreach($specialists as $specialist)
                <div class="col-4">
                    <ul>
                        <li>{{$specialist->name}}</li>
                        <li>{{$specialist->specialization}}</li>
                        <li>{{$specialist->city}}</li>
                        <li><a href="/specialist/{{$specialist->id}}">Daugiau apie meistrą...</a></li>
                    </ul>
                </div>
            @endforeach
        </div>
@endsection