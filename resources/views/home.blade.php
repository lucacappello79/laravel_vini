@extends ('layouts/main')

@section('content')

<div class="container">
    <ul>
        <li><a href="{{ route ('wine')}}">Wines</a></li>
        <li><a href="{{ route ('vine')}}">Vines</a></li>
        <li><a href="{{ route ('winery')}}">Wineries</a></li>
    </ul>

</div>

@endsection