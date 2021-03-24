    @extends('layout')

    @section('content')
    <div class="container">
        
        <a href="/agregar" class="btn btn-primary">CREAR</a>


                <table class="table table-dark table-striped mt-4">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Código</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                @forelse ($objetos as $objeto)
                <tbody>    
                    
                    <tr>
                        <td>{{ $objeto->id }}</td>
                        <td>{{ $objeto->codigo }}</td>
                        <td>{{ $objeto->descripcion }}</td>
                        <td>{{ $objeto->contenido }}</td>
                        <td>{{ $objeto->precio }}</td>
                        <td>
                        <form action="{{url ("/{$objeto->id}") }}" method="POST">
                        <a href="{{ route ('objetos.edit', ['id'=> $objeto->id])}}" class="btn btn-info">Editar</a>         
                        @csrf
                        @method('DELETE')   
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>          
                        </td>        
                    </tr>
                    @empty
                        
                </tbody>
                @endforelse
                </table>

                    </div>
                @endsection