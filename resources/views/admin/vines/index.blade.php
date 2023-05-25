@extends ('layouts/admin')

@section('content')
<h1 class="text-center mt-5">Vines</h1>
<div class="container">
    <table class="table  table-striped table-hover table-primary my-5">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($vines as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td><a href="{{route('admin.vines.show', $item)}}">Info</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection