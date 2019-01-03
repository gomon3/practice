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
                            <th>Pregunta Frecuente</th>
                            <th>Sección</th>
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
                    Aquí puedes visualizar las preguntas frecuentes que tienes dadas de alta.
                </p>
                <p>
                    Puedes dar de alta muchas preguntas frecuentes y asociarlo a una sección
                </p>


                <form action="" method="post">
                    <div class="form-group">
                      <label for="data">Código</label>
                      <input type="text" class="form-control" name="data" id="data" aria-describedby="helpId" placeholder="Código">
                      <small id="helpId" class="form-text text-muted">Agrega </small>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
            
        </div>
    </div>


    

@endsection