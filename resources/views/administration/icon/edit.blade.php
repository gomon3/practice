@extends('layout')

@section('tittle', 'Módulo de administración')

@section('content')

    
    @include('partials.administration.nav')

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12">
                <h1>Editar Icono</h1>
            
                <p>
                    Visita la página de <a href="http://glyph.smarticons.co/">GLYPH</a> y busca el códgio del ícono que deseas.
                </p>
                <p>
                    Ejemplo: Si deseas agregar el ícono <img style="width:24px;height:24px;" src="/glyph-iconset-master/svg/si-glyph-bed.svg"/> deberás ingresar su código, que es el siguiente: <code>si-glyph-bed</code>
                </p>


                <form action="{{ route('icons.update', $icon) }}" method="post">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                      <label for="data">Código</label>
                      <input type="text" class="form-control" name="data" id="data" aria-describedby="helpId" placeholder="Código"
                      value="{{ $icon->data }}">
                      <small id="helpId" class="form-text text-muted">Código de Ícono</small>
                    </div>

                    {!! $errors->first('data', '<div class="alert alert-danger" role="alert">:message</div>') !!}

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
            
        </div>
    </div>


    

@endsection