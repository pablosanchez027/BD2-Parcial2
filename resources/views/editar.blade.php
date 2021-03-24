@extends('layout')

@section('content')

    <div class="container">

      <h2>EDITAR REGISTROS</h2>

          <form action="{{url ("/{$objetos->id}/editar")}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="codigo" class="form-label">Code</label>
              <input id="codigo" name="codigo" type="text" class="form-control" value="{{ $objetos->codigo }}">    
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Description</label>
              <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{ $objetos->descripcion }}">
            </div>
            <div class="mb-3">
              <label for="contenido" class="form-label">Contenido</label>
              <input id="contenido" name="contenido" type="number" class="form-control" value="{{ $objetos->contenido }}">
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio</label>
              <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{ $objetos->precio }}">
            </div>
            <a href="/" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        


    </div>
    @endsection