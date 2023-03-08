<!DOCTYPE html>
<html lang="en">
    @include('_partials/head')
    <body>
    
        <!-- Sidebar-->
  
        <!-- Responsive navbar-->
        @include('_partials/nav')
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                @yield('content')
            </div>
        </div>
    
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>
