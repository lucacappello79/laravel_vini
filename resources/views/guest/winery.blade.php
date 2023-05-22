{{-- @extends ('layouts/main')

@section('content')

<div class="container">
    <h1 class="text-center mt-5">Wineries</h1>
    <table class="table  table-striped table-hover table-success my-5">
        <thead class="table-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Municipality</th>
                <th scope="col">Province</th>
                <th scope="col">Region</th>
                <th scope="col">Country</th>
                <th scope="col">Phone #</th>
                <th scope="col">E-mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($wineries as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->municipality}}</td>
                    <td>{{$item->province}}</td>
                    <td>{{$item->region}}</td>
                    <td>{{$item->country}}</td>
                    <td>{{$item->phone_number}}</td>
                    <td>{{$item->mail}}</td>
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

<div class="container">
    <h1 class="text-center mt-5">Wineries</h1>
    <div class="row my-5">
        @foreach($wineries as $index => $item)
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card bg-{{ $colors[$index % count($colors)] }} text-white"">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <p class="card-text">
                            <strong>Address:</strong> {{$item->address}}<br>
                            <strong>Municipality:</strong> {{$item->municipality}}<br>
                            <strong>Province:</strong> {{$item->province}}<br>
                            <strong>Region:</strong> {{$item->region}}<br>
                            <strong>Country:</strong> {{$item->country}}<br>
                            <strong>Phone #:</strong> {{$item->phone_number}}<br>
                            <strong>E-mail:</strong> {{$item->mail}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection