@extends('layout')

@section('tittle', 'Módulo de administración')

@section('content')

    
    @include('partials.administration.nav')

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12">
                <h1>Nuevo FAQ</h1>


                <form action="{{route('faqs.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="faq">Pregunta frecuente</label>
                        <input type="text" class="form-control" name="faq" id="faq" aria-describedby="helpId" placeholder="Pregunta frecuente">
                        <small id="helpId" class="form-text text-muted">Pregunta frecuente</small>
                    </div>

                    

                    <div class="form-group">
                        <label for="section_id">Sección perteneciente</label>
                        <select class="custom-select" name="section_id" id="section_id">
                            @foreach ($sections as $section)
                                <option value="{{$section->id}}">{{ $section->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
            
        </div>
    </div>


    

@endsection