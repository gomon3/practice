@extends('layout')

@section('tittle', 'Mi Web')

@section('content')

    
    @include('partials.site.nav')

    <br>
    <br>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3">Welcome to my site</h1>
            <p class="lead">Made by Brandon A. Gomez M.</p>
            <hr class="my-2">
            <p>Go to my Linkedin</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="https://www.linkedin.com/in/brandon3-gomez/" role="button">Click Me :)</a>
            </p>
        </div>
    </div>
    

@endsection