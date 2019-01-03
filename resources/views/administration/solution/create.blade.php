@extends('layout')

@section('tittle', 'Módulo de administración')

@section('content')

    
    @include('partials.administration.nav')

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12">
                <h1>Nueva Solución</h1>


                <form action="{{route('solutions.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                      <label for="information">Solución</label>
                      <textarea class="form-control" name="information" id="information" rows="5"></textarea>
                    </div>

                    {!! $errors->first('information', '<div class="alert alert-danger" role="alert">:message</div>') !!}

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>


                <br>
                <br>

                <p>Si deseas agregar links, llena lo siguientes campos, recuerda que en el campo URL, debes empezar con http:// o https://</p>
                <div class="form-inline">
                    <div class="form-group">
                        <label for="url">URL: </label>
                        <input type="text" class="form-control" id="url" placeholder="https://www.facebook.com">
                    </div>
                    <div class="form-group">
                        <label for="remplazo">Texto: </label>
                        <input type="text" class="form-control" id="remplazo" placeholder="Facebook">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="insert()">Agregar</button>
                </div>

                <script>
                    function insert()
                    {
                        var url = $('#url').val();
                        var texto = $('#remplazo').val();

                        var html_tag = '<a href="' + url + '">' + texto + '</a>';


                        $('#url').val('');
                        $('#remplazo').val('');

                        $('#information').val($('#information').val() + ' ' + html_tag);
                    }
                </script>

            </div>
            
        </div>
    </div>


    

@endsection