<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <a class="navbar-brand" href="#">My site</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item {{ setActive('home') }}">
                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ setActive('faqs') }}">
                <a class="nav-link" href="{{route('faqs')}}">FAQs</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('icons.index')}}">CRUDS</a>
            </li>

        </ul>
    </div>
</nav>