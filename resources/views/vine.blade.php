@extends ('layouts/main')

@section('content')
<h1 class="text-center mt-5">Vines</h1>
<div class="container">
    <table class="table  table-striped table-hover table-info my-5">
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

@endsection