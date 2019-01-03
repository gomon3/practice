@extends('layout')

@section('tittle', 'Módulo de administración')

@section('content')

    
    @include('partials.administration.nav')

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12">
                <h1>Preguntas Frecuentes (FAQs)</h1>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pregunta Frecuente</th>
                            <th>Sección</th>
                            <th>Solución</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faqs as $faq)
                            <tr>
                                <td>{{ $faq->id }}</td>
                                <td>{{ $faq->faq }}</td>
                                <td>{{ $faq->section ? $faq->section->nombre : 'NULL' }}</td>
                                <td>{{ $faq->solution ? $faq->solution->information : 'NULL' }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('faqs.edit', $faq->id) }}" role="button">Editar</a>
                                    <form style="display:inline;" method="POST" action="{{ route('faqs.destroy', $faq) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <a class="btn btn-primary" href="{{route('faqs.create')}}" role="button">Agregar Nuevo FAQ</a>
            </div>
            
        </div>
    </div>


    

@endsection