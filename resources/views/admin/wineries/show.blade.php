@extends('layouts/main')

@section('content')

<div class="container">

    <h1 class="text-center mt-5">Wine</h1>

    <table class="table  table-striped table-hover table-info my-5">
        <thead class="table-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Indirizzo</th>
                <th scope="col">Comune</th>
                <th scope="col">Provincia</th>
                <th scope="col">Regione</th>
                <th scope="col">Nazione</th>
                <th scope="col">Recapito telefonico</th>
                <th scope="col">Mail</th>

            </tr>
        </thead>
        <tbody>
    
                <tr>
                    <td>{{$winery->name}}</td>
                    <td>{{$winery->address}}</td>
                    <td>{{$winery->municipality}}</td>
                    <td>{{$winery->province}}</td>
                    <td>{{$winery->region}}</td>
                    <td>{{$winery->country}}</td>
                    <td>{{$winery->phone_number}}</td>
                    <td>{{$winery->mail}}</td>
                </tr>
    
        </tbody>
    </table>
    <a href="{{route('admin.wineries.edit', $winery)}}"><button class="btn btn-primary">Edit</button></a>
</div>

@endsection