@extends('layouts/main')

@section('content')

<div class="container">

    <h1 class="text-center mt-5">Wines</h1>

    <table class="table  table-striped table-hover table-info my-5">
        <thead class="table-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Anno</th>
                <th scope="col">Colore</th>
                <th scope="col">Tipo</th>
                <th scope="col">Alchool</th>
                <th scope="col">Estratto</th>
                <th scope="col">Acidita</th>
                

            </tr>
        </thead>
        <tbody>
    
                <tr>
                    <td>{{$wine->name}}</td>
                    <td>{{$wine->year}}</td>
                    <td>{{$wine->color}}</td>
                    <td>{{$wine->type}}</td>
                    <td>{{$wine->alcohol_content}}</td>
                    <td>{{$wine->extract}}</td>
                    <td>{{$wine->acidity}}</td>
                </tr>
    
        </tbody>
    </table>
    <a href="{{route('admin.wines.edit', $wine)}}"><button class="btn btn-primary">Edit</button></a>
</div>

@endsection