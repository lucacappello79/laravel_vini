@extends('layouts/main')

@section('content')
    
<div class="container">


  <div class=" create-section">

      <form action="{{route('admin.wines.update', $wine)}}" method="POST" class="my-form">
        @csrf
        @method('PUT')
    
        <div class="mb-3">
          <label for="name">Nome</label>
          <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" required value="{{old('name') ?? $wine->name}}">

          @error('name')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
    
        <div class="mb-3">
          <label  for="year">Anno</label>
          <input class="form-control @error('year') is-invalid @enderror" id="year" name="year" required value="{{old('year') ?? $wine->year}}">
          @error('year')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror


        </div>

        <div class="mb-3">
          <label for="winery_id">Azienda</label>
          <select name="winery_id" id="winery_id" class="form-select @error('winery_id') is-invalid @enderror">
    
            <option value="">Non specificata</option>
    
            @foreach ($wineries as $item)
                <option value="{{$item->id}}" {{$item->id == old('winery_id',$wine->winery_id) ? 'selected' : ''}}>{{$item->name}}</option>
            @endforeach
    
          </select>
          @error('winery_id')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>

        <div class="mb-3 form-group">
          <h3>Vitigni:</h3>
  
          @foreach($vines as $item)
          <div class="form-check">
            <input type="checkbox" id="vine-{{$item->id}}" name="vines[]" value="{{$item->id}}" @checked($wine->vines->contains($item))>
            <label for="vine-{{$item->id}}">{{$item->name}}</label>
          </div>
          @endforeach
  
        </div>
    
    
        <div class="mb-3">
          <label for="color">Colore</label>
          <input class="form-control @error('color') is-invalid @enderror" type="text" id="color" name="color" required  value={{old('color') ?? $wine->color}}>
          @error('color')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
    
        <div class="mb-3">
          <label for="type">Tipo</label>
          <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" required value={{old('type') ?? $wine->type}}>
          @error('type')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
    
        <div class="mb-3">
          <label for="alcohol_content">alcohol %</label>
          <input class="form-control @error('alcohol_content') is-invalid @enderror" type="text" id="alcohol_content" name="alcohol_content"  required value={{old('alcohol_content') ?? $wine->alcohol_content}}>
          @error('alcohol_content')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
    
        <div class="mb-3">
            <label for="extract">Residuo</label>
            <input class="form-control @error('extract') is-invalid @enderror" extract="text" id="extract" name="extract" required value={{old('extract') ?? $wine->extract}} >
            @error('extract')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
          </div>
    
          <div class="mb-3">
            <label for="acidity">Acidità</label>
            <input class="form-control @error('acidity') is-invalid @enderror" type="text" id="acidity" name="acidity" required value={{old('acidity') ?? $wine->acidity}}>
            @error('acidity')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
          </div>
    
    
        <button class="btn btn-primary my-btn" type="submit">Modifica</button>
      </form>
    
    </main>
  </div>
</div>

@endsection