@extends ('layouts/main')

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

@endsection