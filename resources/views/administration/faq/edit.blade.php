@extends('layout')

@section('tittle', 'Módulo de administración')

@section('content')

    
    @include('partials.administration.nav')

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12">
                <h1>Editar FAQ</h1>


                <form action="{{route('faqs.update', $faq)}}" method="post">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="faq">Pregunta frecuente</label>
                        <input type="text" class="form-control" name="faq" id="faq" aria-describedby="helpId" placeholder="Pregunta frecuente"
                        value="{{ $faq->faq }}">
                        <small id="helpId" class="form-text text-muted">Pregunta frecuente</small>
                    </div>

                    {!! $errors->first('faq', '<div class="alert alert-danger" role="alert">:message</div>') !!}

                    @if ($sections->count() > 0)
                        <div class="form-group">
                            <label for="section_id">Sección perteneciente</label>
                            <select class="custom-select" name="section_id" id="section_id"
                            value="{{ $faq->section_id }}">
                                @foreach ($sections as $section)
                                    @if ($section->id == $faq->section_id)
                                        <option value="{{$section->id}}" selected>{{ $section->nombre }}</option>
                                    @else
                                        <option value="{{$section->id}}">{{ $section->nombre }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    @endif
                    
                    @if ($solutions->count() > 0)
                        <div class="form-group">
                            <label for="solution_id">Solución a la pregunta</label>
                            <select class="custom-select" name="solution_id" id="solution_id"
                            value="{{ $faq->solution_id }}">
                                @foreach ($solutions as $solution)
                                    @if ($solution->id == $faq->solution_id)
                                        <option value="{{$solution->id}}" selected>{{ $solution->information }}</option>
                                    @else
                                        <option value="{{$solution->id}}">{{ $solution->information }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    @endif
                    

                    

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
            
        </div>
    </div>


    

@endsection