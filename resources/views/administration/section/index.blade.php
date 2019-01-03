@extends('layout')

@section('tittle', 'Módulo de administración')

@section('content')

    
    @include('partials.administration.nav')

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12">
                <h1>Secciones</h1>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Icono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sections as $section)
                        <tr>
                            <td>
                                {{ $section->id }}
                            </td>
                            <td>
                                {{ $section->nombre }}
                            </td>
                            <td class="text-center">
                                <img style="width:24px;height:24px;" src="/glyph-iconset-master/svg/{{ $section->icon->data }}.svg"/>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('sections.edit', $section->id) }}" role="button">Editar</a>
                                <form style="display:inline;" method="POST" action="{{ route('sections.destroy', $section) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
        
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                

                <a class="btn btn-primary" href="{{ route('sections.create') }}" role="button">Nueva Sección</a>
            </div>
            
        </div>
    </div>


    

@endsection