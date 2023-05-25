@extends('layouts/admin')

@section('content')
<div class="container">
    <h1 class="text-center mt-5">Vitigno:{{$vine->name}} </h1>
    <div class="row my-5">
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        
                        <p class="card-text">
                          Descrizione: {{$vine->description}}
                        </p>
                        <h6>Vini:</h6>
                        <ul>
                          @foreach($vine->wines as $item)
                          <li>{{$item->name}}</li>
                          @endforeach
                        </ul>
                        
                    </div>
                  </div>
                  <a class="btn btn-primary" href="{{route('admin.vines.edit', $vine)}}">Edit</a>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Elimina vitigno
                  </button>

            </div>
            
    </div>

     <!-- Modal -->
 <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content text-bg-dark">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina Vitigno?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sei sicuro di voler eliminare questo vitigno? L'azione è irreversibile
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{route('admin.vines.destroy', $vine)}}" method="POST">
          @csrf
          @method('DELETE')

          <button type="submit" class="btn btn-danger my-create delete-btn">Elimina </button>
          </form>
        
      </div>
    </div>
  </div>
</div>
@endsection