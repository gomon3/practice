@extends('layout')

@section('tittle', 'Módulo de administración')

@section('content')

    
    @include('partials.administration.nav')

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12">
                <h1>Nueva Sección</h1>


                <form action="{{route('sections.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                      <label for="nombre">Nombre de la sección</label>
                      <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
                      <small id="helpId" class="form-text text-muted">Nombre de la sección</small>
                    </div>

                    

                    <div class="form-group">
                        <label for="icon_id">Icono para la sección</label>
                        <select class="custom-select" name="icon_id" id="icon_id">
                            @foreach ($icons as $icon)
                                <option value="{{$icon->id}}">{{ $icon->data }}</option>
                            @endforeach
                        </select>
                    </div>

                    {!! $errors->first('nombre', '<div class="alert alert-danger" role="alert">:message</div>') !!}
                    {!! $errors->first('icon_id', '<div class="alert alert-danger" role="alert">:message</div>') !!}

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
            
        </div>
    </div>


    

@endsection