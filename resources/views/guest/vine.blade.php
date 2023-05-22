{{-- @extends ('layouts/main')

@section('content')
<h1 class="text-center mt-5">Vines</h1>
<div class="container">
    <table class="table  table-striped table-hover table-primary my-5">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vines as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection --}}

@php
    $colors = ['primary', 'secondary', 'success', 'danger', 'dark'];
@endphp

@extends ('layouts/main')

@section('content')

<form class="m-3" action="{{route('guestVine')}}" method="GET">
    @csrf
    <label for="title">Search</label>
    <input type="text" name="name" id="name">
    <button type="submit"> cerca</button>
</form>

<div class="container">
    <h1 class="text-center mt-5">Vines</h1>
    <div class="row my-5">
        @foreach($vines as $index => $item)
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card bg-{{ $colors[$index % count($colors)] }} text-white"">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <p class="card-text">
                            <strong>Description:</strong> {{$item->description}}<br>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection