@extends('layout')

@section('tittle', 'Preguntas Frecuentes')

@section('content')

    
    @include('partials.site.nav')

    <br>
    <br>
    <div class="container">
        <h2>Preguntas Frecuentes</h2>

        <br>

        @if ($sections->count() > 0)
          @foreach ($sections as $section)
              <h4>{{ $section->nombre }} <img style="width:24px;height:24px;" src="/glyph-iconset-master/svg/{{ $section->icon->data }}.svg"/></h4>


              <div id="accordion">
                  @foreach ($faqs as $faq)
                      @if ($section->id == $faq->section_id)
                          <div class="card">
                              <div class="card-header" id="headingOne{{$loop->iteration}}">
                                  <h5 class="mb-0">
                                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne{{$loop->iteration}}" aria-expanded="true" aria-controls="collapseOne{{$loop->iteration}}">
                                          {{ $faq->faq }}
                                      </button>
                                  </h5>
                              </div>
                          
                              <div id="collapseOne{{$loop->iteration}}" class="collapse" aria-labelledby="headingOne{{$loop->iteration}}" data-parent="#accordion">
                                  <div class="card-body">
                                      {{ $faq->solution->information }}
                                  </div>
                              </div>
                          </div>
                      @endif
                  @endforeach
              </div>

              <br>
              <br>
              <br>
              
          @endforeach
        @endif
    </div>
    

@endsection