@php
    $colors = ['primary', 'secondary', 'success', 'danger', 'dark'];
@endphp

@extends ('layouts/main')

@section('content')

<div class="container">
    <h1 class="text-center mt-5">Wines</h1>
    <div class="row my-5">
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h5 class="card-title">{{$wine->name}}</h5>
                       
                        <h3>{{$wine->winery?->name}}</h3>
                        <p class="card-text">
                            <strong>Address:</strong> {{$wine->year}}<br>
                            <strong>Province:</strong> {{$wine->color}}<br>
                            <strong>Region:</strong> {{$wine->type}}<br>
                            <strong>Country:</strong> {{$wine->alcohol_content}}<br>
                            <strong>Phone #:</strong> {{$wine->extract}}<br>
                            <strong>E-mail:</strong> {{$wine->acidity}}
                        </p>
                    </div>
                </div>
            </div>
    </div>
    <a href="{{route('admin.wines.edit', $wine)}}"><button class="btn btn-primary mb-4">Edit</button></a>

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Elimina
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Sei sicuro di voler eliminare questo elemento? L'azione è irreversibile
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
              <form action="{{route('admin.wines.destroy', $wine)}}" method="POST">
                @csrf
                @method('DELETE')
            
                <button type="submit" class="btn btn-danger my-create delete-btn">Elimina </button>
                </form>
              
            </div>
          </div>
        </div>
      </div>
</div>

@endsection