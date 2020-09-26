<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/backend/bootstrap.min.css') }}" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/toastr.min.css')}}">
    <title>
        Department of Computer Science and EngineeringPundra University of Science & Technology
    </title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('admin.admission.list') }}">Admission List</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('admin.application.certificate') }}">Application for Certificate</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('admin.subjects') }}">Subject Choosen by Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

@yield('content')

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('public/backend/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('public/backend/popper.min.js') }}"></script>
    <script src="{{ asset('public/backend/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/toastr.min.js') }} "></script>
    {!! Toastr::message() !!}
    <script>
        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error('{{ $error }}', 'Error')
            @endforeach
        @endif
    </script>
</body>
</html>

