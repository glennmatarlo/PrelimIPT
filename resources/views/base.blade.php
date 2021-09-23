@include('head')
<body style="background-color: @include('color');">
@include('bg')
    <!-- Navbar -->
    @include('nav')

@if (session('errors'))
    <div class="alert alert-danger">
        <div class="container">
            Please fix the following errors.
            <ul>
                @foreach(session('errors')->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@if (session('Error'))
    <div class="alert alert-danger">
        <div class="container">
            {{session('Error') }}
        </div>
    </div>
@endif
@if (session('Message'))
    <div class="alert alert-success">
        <div class="container">
            {{session('Message') }}
        </div>
    </div>
@endif

<div class="container d-flex justify-content-center">
            <div class="col-6 col-md-5">
                @yield('content')
            </div>
        </div>
            <br><br><br><br>
</div>
</body>
@include('foot')