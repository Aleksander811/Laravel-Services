@extends('main')
@section('content')
    <h1 class="mt-4">Servisų meistrai</h1>
        <div class="card-body">
            
            <div class="card mb-3">
            @foreach($specialists as $specialist)
                <div class="row g-0 border">
                    <div class="col-md-3">
                    <img src="{{asset('/storage/'.$specialist->photo)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-3">
                    <div class="card-body">
                        <h5 class="card-title">{{$specialist->name}}</h5>
                        <p class="card-text">{{$specialist->specialization}}</p>
                        <p class="card-text">{{$specialist->city}}</p>
                        <a href="/specialist/{{$specialist->id}}" >Plačiau<</a>
                    </div>
                    </div>                 
                    <div class="col-md-6">
                        <h5>Reitingas: {{$specialist->rating}} <i class="bi bi-star"></i></h5>
                        <p><a href="/specialist/add/rating/{{$specialist->id}}"><i class="bi bi-heart"></i></a></p>
                    </div>
                    @endforeach
                </div>
            </div>  
        </div>
@endsection



