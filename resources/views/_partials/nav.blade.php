<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid" id="form">
    <form class="d-flex">
        <div class="mb-3 me-3">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        </div>
        <div class="mb-3 me-2">
            <select class="form-select" aria-label="Default select example">
              <option selected>Specializacija</option>
              @foreach($specialists as $specialist)
              <option value="{{$specialist->serviceId}}">{{$specialist->specialization}}</option>
              @endforeach
            </select>
        </div>
        <div class="mb-3 me-2">
            <select class="form-select" aria-label="Default select example">
              <option selected>Servisas</option>
              @foreach($specialists as $specialist)
              <option value="{{$specialist->serviceId}}">{{$specialist->serviceId}}</option>
              @endforeach
            </select>
        </div>
        <div class="mb-3 me-2">
            <select class="form-select" aria-label="Default select example">
              <option selected>Miestas</option>
              @foreach($specialists as $specialist)
              <option value="{{$specialist->serviceId}}">{{$specialist->city}}</option>
              @endforeach
            </select>
        </div>
        <div class="mb-3 me-2">
            <select class="form-select" aria-label="Default select example">
              <option selected>Lytis</option>
              <option value="1">Moteris</option>
              <option value="2">Vyras</option>
            </select>
        </div>
        <div class="mb-3 me-2">
            <select class="form-select" aria-label="Default select example">
              <option selected>Reitingas</option>
              <option value="1">77</option>
            </select>
        </div>
        <div class="mb-3 me-2">
        <button type="button" class="btn btn-primary">Filtruoti</button>
        </div>
        <div class="mb-3 me-2 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Prid??ti meistr?? arba servis??
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item nav-link" href="/add-specialist">Prid??ti meistr??</a></li>
              <li><a class="dropdown-item nav-link" href="/add-service">Naujas servisas</a></li>
              <li><a class="dropdown-item nav-link" href="/all-services">Visi servisai</a></li>
            </ul>
        </div>
      </form>
  </div>
</nav>


<!-- 




    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
                <a class="navbar-brand" href="#">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </div>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servisai</a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/add-service">Naujas servisas</a>
              <a class="dropdown-item" href="/all-services">Visi servisai</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Meistrai
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item nav-link" href="/add-specialist">Prid??ti meistr??</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
            </ul>
          </li>
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
      </form>
    </div>



-->