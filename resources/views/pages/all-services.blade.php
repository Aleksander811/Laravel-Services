@extends('main')
@section('content')
    <h1 class="mt-4">Visi servisai</h1>
    <table class="table">
        <tr>
            <th>Serviso pavadinimas</th>
            <th>Adresas</th>
            <th>Serviso vadovas</th>
            <th>Keisti</th>
            <th>Šalinti</th>
        </tr>
        @foreach($services as $service)
           <tr>
                <td>{{$service->name}}</td>
                <td>{{$service->adress}}</td>
                <td>{{$service->boss}}</td>
                <td><a href="/service/edit/{{$service->id}}">Keisti</a></td>
                <td><a href="/service/delete/{{$service->id}}">Šalinti</a></td>
           </tr>
        @endforeach
    </table>
@endsection