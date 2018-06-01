<footer class="background-grey pt-5">
  <div class="container">
    <div class="row">
      <div class="col-6 col-md">
        <h5 class="text-uppercase"><a class="text-secondary" href="{{ route('about') }}"><strong>Quiénes somos</strong></a></h5>
      </div>
      <div class="col-6 col-md">
        <h5 class="text-uppercase"><a class="text-secondary" href="{{ route('services') }}"><strong>Nuestros servicios</strong></a></h5>
      </div>
      <div class="col-6 col-md">
        <h5 class="text-uppercase"><a class="text-secondary" href="{{ route('faqs') }}"><strong>Faq</strong></a></h5>
      </div>
      <div class="col-6 col-md">
        <h5 class="text-uppercase"><a class="text-secondary" href="{{ route('contact') }}"><strong>Contacto</strong></a></h5>
      </div>
      <div class="col-6 col-md">
        <h5 class="text-uppercase"><a class="text-secondary" href="{{ route('quote') }}"><strong>Cotiza</strong></a></h5>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="row">
          <div class="col-lg-6">
            <p class="font-weight-normal text-secondary">&copy; dinkbit</p>
            <p class="font-weight-normal text-secondary">Todos los derechos reservados</p>
          </div>
          <div class="col-lg-6">
            <p class="font-weight-normal text-secondary">Aviso de privacidad</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="background-purple">
    <div class="container">
      <div class="row pt-2">
        <div class="col-lg-12 col-md-12">
          <div class="row">
            <div class="col-lg-6 col-md-12 d-flex justify-content-start justify-content-md-start">
              <ul class="list-inline text-small">
                <li class="list-inline-item"><a class="text-white" href="{{ route('faqs') }}">¿Preguntas?</a></li>
                <li class="list-inline-item"><a class="text-white" href="mailto:contacto@dinkbit.com">contacto@dinkbit.com</a></li>
                <li class="list-inline-item"><a class="text-white" href="tel:22241607">22241607</a></li>
              </ul>
            </div>
            <div class="col-lg-6 col-md-12 d-flex justify-content-lg-end justify-content-md-start justify-content-sm-start">
              <ul class="list-inline text-small">
                <li class="list-inline-item text-uppercase text-white">Síguenos en:</li>
                <li class="list-inline-item"><a class="text-white" href="https://www.facebook.com/dinkbit"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a class="text-white" href="https://twitter.com/dinkbit"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a class="text-white" href="https://mx.linkedin.com/company/dinkbit"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li class="list-inline-item">
                  <img src="{{ asset('img/logos/logo.png')}}" class="image-footer" alt="">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>
