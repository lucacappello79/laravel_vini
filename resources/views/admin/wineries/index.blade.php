@extends ('layouts/admin')

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
                <th scope="col" ></th>
                <th scope="col">  </th>
             
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
                    <td><a href="{{route('admin.wineries.show', $item)}}">Apri</a></td>
                    <td> <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Elimina Progetto
                      </button></td>
                 
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{route('admin.wineries.create')}}">Aggiungi</a>
</div>

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content text-bg-dark">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Vuoi eliminare questa cantina dalla lista?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Sei sicuro di voler eliminare questa cantina? L'azione è irreversibile
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
          <form action="{{route('admin.wineries.destroy', $item)}}" method="POST">
            @csrf
            @method('DELETE')
  
            <button type="submit" class="btn btn-danger my-create delete-btn">Elimina </button>
            </form>
          
        </div>
      </div>
    </div>
  </div>

@endsection