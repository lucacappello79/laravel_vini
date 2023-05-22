@extends ('layouts/main')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-4 my-5">
            <a class="btn btn-danger btn-block mb-3" href="{{ route('guestHome') }}">Wines</a>
        </div>
        <div class="col-4 my-5">
            <a class="btn btn-primary btn-block mb-3" href="{{ route('guestHome') }}">Vines</a>
        </div>
        <div class="col-4 my-5">
            <a class="btn btn-warning btn-block mb-3" href="{{ route('guestHome') }}">Wineries</a>
        </div>
    </div>
</div>

@endsection