@extends ('layouts/main')

@section('content')

<h1 class="text-center mt-5">Welcome to the all things wine DB</h1>

<div class="container">
    <div class="row">
        <div class="col-4 my-5 d-flex justify-content-center">
            <a class="btn btn-danger btn-block mb-3" href="{{ route('guestWine') }}">Wines</a>
        </div>
        <div class="col-4 my-5 d-flex justify-content-center">
            <a class="btn btn-primary btn-block mb-3" href="{{ route('guestVine') }}">Vines</a>
        </div>
        <div class="col-4 my-5 d-flex justify-content-center">
            <a class="btn btn-warning btn-block mb-3" href="{{ route('guestWinery') }}">Wineries</a>
        </div>
    </div>
</div>

@endsection