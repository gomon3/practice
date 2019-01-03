@extends('layout')

@section('tittle', 'Módulo de administración')

@section('content')

    
    @include('partials.administration.nav')

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12">
                <h1>íconos</h1>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Códgio</th>
                            <th>Visualización</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                        </tr>
                        <tr>
                            <td scope="row">asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                        </tr>
                    </tbody>
                </table>

                <br>
                <br>


                <p>
                    Para poder agregar más íconos a la base de datos, debes de agregar el código del ícono.
                </p>
                <p>
                    Visita la página de <a href="http://glyph.smarticons.co/#usage">GLYPH</a> y busca el ícono el ícono que deseas.
                </p>
                <p>
                    Ejemplo: Si deseas agregar el ícono <img style="width:24px;height:24px;" src="/glyph-iconset-master/svg/si-glyph-bed.svg"/> deberás ingresar su código, que es el siguiente: <code>si-glyph-bed</code>
                </p>


                <form action="" method="post">
                    <div class="form-group">
                      <label for="data">Código</label>
                      <input type="text" class="form-control" name="data" id="data" aria-describedby="helpId" placeholder="Código">
                      <small id="helpId" class="form-text text-muted">Código de Ícono</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
            
        </div>
    </div>


    

@endsection