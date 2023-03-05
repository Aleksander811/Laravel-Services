@if($errors->any())  <!-- $errors gaunamas is kontrolierio, any tikrina ar yra klaidu -->
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)  <!-- gaudo visas klaidas, susikuriam kintam $error kuri atvaizduos -->
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif