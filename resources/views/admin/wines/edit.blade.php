@extends('layouts/main')

@section('content')
    

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
        <label for="winery">Azienda</label>
        <input class="form-control @error('winery') is-invalid @enderror" type="text" id="winery" name="winery" required  value={{old('winery') ?? $wine->winery}}>
        @error('winery')
         <div class="invalid-feedback">
          {{$message}}
         </div>
        @enderror
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


@endsection