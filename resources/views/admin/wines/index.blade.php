@extends('layouts/main')

@section('content')

<div class="container">

    <h1 class="text-center mt-5">Wine</h1>

    <table class="table  table-striped table-hover table-info my-5">
        <thead class="table-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Year</th>
                <th scope="col">Color</th>
                <th scope="col">Type</th>
                <th scope="col">Alcohol %</th>
                <th scope="col">Extract g/l</th>
                <th scope="col">Acidity g/l</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($wines as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->year}}</td>
                    <td>{{$item->color}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->alcohol_content}} %</td>
                    <td>{{$item->extract}} g/l</td>
                    <td>{{$item->acidity}} g/l</td>
                    <td><a href="{{route('admin.wines.show', $item)}}">Apri</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('admin.wines.create')}}"><button class="btn btn-primary">Add</button></a>
</div>

@endsection