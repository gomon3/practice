<ul class="nav nav-tabs nav-stacked">
  <li class="nav-item">
    <a href="{{route('login.show')}}" class="nav-link {{ setActive('login.show') }}">Login</a>
  </li>
  <li class="nav-item">
    <a href="{{route('icons.index')}}" class="nav-link {{ setActive('icons.index') }}">Iconos</a>
  </li>
  <li class="nav-item">
    <a href="{{route('sections.index')}}" class="nav-link {{ setActive('sections.index') }}">Secciones</a>
  </li>
  <li class="nav-item">
      <a href="{{route('solutions.index')}}" class="nav-link {{ setActive('solutions.index') }}">Soluciones</a>
    </li>
  <li class="nav-item">
    <a href="{{route('faqs.index')}}" class="nav-link {{ setActive('faqs.index') }}">Faqs</a>
  </li>
</ul>