@extends('main')
@section('content')
    <div class="card mt-5">
        <h1 class="mt-4">Paieška</h1>
 @if(isset($results))
            <h1 class="mt-4">Paieškos rezultatai</h1>
        @foreach($results as $specialist)
            <div class="col-4">
                <ul>
                    <li>{{$specialist->name}}</li>
                    <li><a href="/specialist/{{$specialist->id}}">Plačiau...</a></li>
                </ul>
            </div>
        @endforeach
     @endif
    </div>

@endsection