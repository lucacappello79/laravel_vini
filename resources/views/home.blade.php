@extends ('layouts/main')

@section('content')

{{-- <div class="container">
    <ul>
        <li><a href="{{ route ('wine')}}">Wines</a></li>
        <li><a href="{{ route ('vine')}}">Vines</a></li>
        <li><a href="{{ route ('winery')}}">Wineries</a></li>
    </ul>

</div> --}}

{{-- <div class="container">
    <ul class="list-group my-5">
        <li class="list-group-item"><a class="text-decoration-none" href="{{ route ('wine')}}">Wines</a></li>
        <li class="list-group-item"><a class="text-decoration-none" href="{{ route ('vine')}}">Vines</a></li>
        <li class="list-group-item"><a class="text-decoration-none" href="{{ route ('winery')}}">Wineries</a></li>
    </ul>
</div> --}}

<div class="container">
    <div class="row">
        <div class="col-4 my-5">
            <a class="btn btn-danger btn-block mb-3" href="{{ route('wine') }}">Wines</a>
        </div>
        <div class="col-4 my-5">
            <a class="btn btn-primary btn-block mb-3" href="{{ route('vine') }}">Vines</a>
        </div>
        <div class="col-4 my-5">
            <a class="btn btn-warning btn-block mb-3" href="{{ route('winery') }}">Wineries</a>
        </div>
    </div>
</div>

@endsection