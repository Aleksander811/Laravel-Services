<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/search">Paieška</a>
        @foreach($servicesList as $service)
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/service/{{$service->id}}">{{$service->name}}</a>
        @endforeach
    </div>
</div>