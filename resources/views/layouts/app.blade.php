<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/ico" href="{{ asset('public/frontend/img/logo.png') }}" />
    <title>Department of CSE, PUB</title>
    <link rel="stylesheet" href="{{ asset('public/frontend/css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/smart-menus.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/js/data_table/jquery.dataTables.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/js/datetimepicker/jquery.datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/main.css') }}">
    <script src="{{ asset('public/frontend//js/vendor/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    <style>
        .row.py-5 {
            padding: 50px 0;
        }
    </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top margin-bottom-120" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Banner -->
        <div class="row header">
            <div class="col-md-6">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('public/frontend/img/Pundra.png') }}" alt="logo">
                    <p class="cse">Department of Computer Science and Engineering</p>
                    <p class="pub">Pundra University of Science & Technology</p>
                </a>
            </div>
            <div class="col-md-6">
                <ul class="top-menu nav navbar-nav full-width" role="group">
                    <li><a href="#">Services <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="group">
                            <li><a href="#">Online Services</a></li>
                            <li><a href="{{ route('admission-form') }}">Admission Form</a></li>
                            <li><a href="{{ route('application') }}">Application for Certificate</a></li>
                        </ul>
                    </li>
                    @guest
                    <li><a target="_blank" href="{{ route('login') }}">Login</a></li>
                    @else

                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                    @endguest
                    <li><a target="_blank" href="#">Feedback</a></li>
                </ul>
            </div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav full-width">
                <li><a class="padding-0" href="#"><img class="navbar-icon" src="{{ asset('public/frontend/img/logo.png') }}" alt="logo"></a></li>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{ url('/admission')}}">Admissions <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group">
                        <li><a href="{{ url('/admission')}}">Admissions Information</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/general_info')}}">General Information <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group">
                    <li><a href="{{ url ('/general_info/prospective')}}">Prospective Students</a></li>
                        <li><a href="{{ url('/general_info/current_std') }}">Current Students</a></li>
                        <li><a href="{{url('/general_info/ug_studies')}}">Undergraduate Studies</a></li>
                        <li><a href="{{url('/general_info/pg_studies')}}">Graduate Studies</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/researches')}}" class="has-submenu">Research <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group">
                        <li><a href="{{url('/researches/publication')}}">Publications</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/activities')}}">Activities <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group">
                        <li><a href="{{url('/activities/indgov')}}">Industry & Government</a></li>
                        <li><a href="{{url('/activities/feature')}}">Features</a></li>
                        <li><a href="{{url('/activities/self_assessment')}}">Self Assessment</a></li>

                    </ul>
                </li>
                <li><a href="javascript:void(0)">Student Section<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group">
                        <li><a href="{{url('/downloads/class_routine')}}">Class Routine</a></li>
                        <li><a href="{{url('/downloads/student_notice')}}">Student Notice</a></li>
                    </ul>
                </li>

                <li><a href="javascript:void()" class="has-submenu">Honourable Teachers <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group">
                        <li><a href="#">Teachers List</a></li>


                    </ul>
                </li>
                <li><a href="#" class="has-submenu">Others <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="group">

                        <li><a href="{{url('/downloads')}}">Downloadable Forms</a></li>


                    </ul>
                </li>
            <li><a href="{{ url('/contact')}}" class="has-submenu">Contact </a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.container -->
</div>
<div class="container padding-top-120">
    <div class="row">

        @yield('content')

    </div>
</div>


<hr>
<footer>
    <p style="text-align: center"> Copyright &copy; Department of Computer Science and Engineering,PUB, Bogura-5800.
    </p>
</footer>

<script src="{{ asset('public/frontend/js/toastr.min.js') }} "></script>
<script src="{{ asset('public/frontend/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/smart-menus.js') }}"></script>
<script src="{{ asset('public/frontend/js/datetimepicker/jquery.datetimepicker.js') }}"></script>
<script src="{{ asset('public/frontend/js/main.js') }}"></script>
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
