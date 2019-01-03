@extends('layout')

@section('tittle', 'Módulo de administración')

@section('content')

    
    @include('partials.administration.nav')

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12">
                <h1>Inicio de sesión</h1>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" name="email" id="" class="form-control" placeholder="Correo electrónico" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </form>      
            </div>
            
        </div>
    </div>


    

@endsection