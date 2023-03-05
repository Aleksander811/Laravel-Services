@extends('main')
@section('content')
    <div class="card mt-5">
        <h1 class="mt-4">{{$specialist->name}}</h1>
        <img src="{{asset('/storage/'.$specialist->photo)}}" alt="">
        <h3>Informacija apie meistrą</h3>
        <ul>
            <li>Meistro specializacija: {{$specialist->specialization}}</li>
            <li>Miestas: {{$specialist->city}}</li>
        </ul>
        <h4>Veiksmai:</h4>
        <ul>
            <li><a href="/specialist/edit/{{$specialist->id}}">Redaguoti</a></li>
            <li><a href="/specialist/delete/{{$specialist->id}}">Šalinti</a></li>
        </ul>
    </div>

@endsection