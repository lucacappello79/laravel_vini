@extends('layouts/main')

@section('content')
    
<div class="container">


  <div class=" create-section">

      <form action="{{route('admin.vines.update', $vine)}}" method="POST" class="my-form">
        @csrf
        @method('PUT')
    
        <div class="mb-3">
          <label for="name">Nome</label>
          <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" required value="{{old('name') ?? $vine->name}}">

          @error('name')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
    
        <div class="mb-3">
          <labe  for="description">Descrizione</label>
          <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" required>{{old('description') ?? $vine->description}}</textarea>
          @error('description')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror


        </div>

        <button class="btn btn-primary my-btn" type="submit">Modifica</button>
    </form>