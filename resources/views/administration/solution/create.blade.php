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
            </div>
            
        </div>
    </div>


    

@endsection