@extends('layouts/main')

@section('content')
    
<div class="container">


  <div class=" create-section">

      <form action="{{route('admin.wineries.update', $winery)}}" method="POST" class="my-form">
        @csrf
        @method('PUT')
    
        <div class="mb-3">
          <label for="name">Nome</label>
          <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" required value="{{old('name') ?? $winery->name}}">

          @error('name')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
    
        <div class="mb-3">
          <labe  for="address">Indirizzo</label>
          <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" required>{{old('address') ?? $winery->address}}</textarea>
          @error('address')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror


        </div>

    

    
        <div class="mb-3">
          <label for="municipality">Comune:</label>
          <input class="form-control @error('municipality') is-invalid @enderror" type="text" id="municipality" name="municipality" required  value={{old('municipality') ?? $winery->municipality}}>
          @error('municipality')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
    
        <div class="mb-3">
          <label for="province">Provincia:</label>
          <input class="form-control @error('province') is-invalid @enderror" province="text" id="province" name="province" required value={{old('province') ?? $winery->province}}>
          @error('province')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
    
        <div class="mb-3">
          <label for="region">Regione:</label>
          <input class="form-control @error('region') is-invalid @enderror" type="text" id="region" name="region"  required value={{old('region') ?? $winery->region}}>
          @error('region')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
    
       
    
          <div class="mb-3">
            <label for="country">Nazione:</label>
            <input class="form-control @error('country') is-invalid @enderror" type="text" id="country" name="country" required value={{old('country') ?? $winery->country}}>
            @error('country')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
          </div>

          <div class="mb-3">
            <label for="phone_number">Recapito telefonico:</label>
            <input class="form-control @error('phone_number') is-invalid @enderror" type="text" id="phone_number" name="phone_number" required value={{old('phone_number') ?? $winery->phone_number}}>
            @error('phone_number')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
          </div>

          <div class="mb-3">
            <label for="mail">Mail:</label>
            <input class="form-control @error('mail') is-invalid @enderror" type="text" id="mail" name="mail" required value={{old('mail') ?? $winery->mail}}>
            @error('mail')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
          </div>
    
    
        <button class="btn btn-primary my-btn" type="submit">Aggiungi</button>
      </form>
    
    </main>
  </div>

</div>
@endsection