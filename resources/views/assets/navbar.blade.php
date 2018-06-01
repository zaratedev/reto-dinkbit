<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('/img/logos/logo.png')}}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">Quiénes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('services') }}">Nuestros servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('faqs') }}">Faq</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
        </li>
        <a href="{{ route('quote') }}" class="btn btn-outline-light my-2 my-sm-0 text-uppercase">Cotiza tu préstamo</a>
      </ul>
    </div>
  </div>
</nav>
