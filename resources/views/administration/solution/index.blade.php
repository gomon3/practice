@extends('layout')

@section('tittle', 'Módulo de administración')

@section('content')

    
    @include('partials.administration.nav')

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12">
                <h1>Soluciones</h1>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Solución</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($solutions as $solution)
                        <tr>
                            <td>{{ $solution->id }}</td>
                            <td>{{ $solution->information }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('solutions.edit', $solution->id) }}" role="button">Editar</a>
                                <form style="display:inline;" method="POST" action="{{ route('solutions.destroy', $solution) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <a class="btn btn-primary" href="{{route('solutions.create')}}" role="button">Agregar Nueva Solución</a>
            </div>
            
        </div>
    </div>


    

@endsection