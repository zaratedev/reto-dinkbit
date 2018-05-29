@extends('layouts.app')

@section('content')
  <section class="image-heeder" style="background-image:url(img/headers/header-contacto.jpg)">
    <div class="screen">
      <div class="container full-height d-flex align-items-center">
        <div class="row">
          <div class="col-sm-12 justify-content-center">
            <h3 class="text-center text-white">Lorem ipsum</h3>
            <p class="text-center text-white font-medium">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="text-blue text-uppercase">Lorem ipsum</h2>
          <p class="text-secondary font-small">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
          <p class="text-secondary font-small">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-12">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Apellidos">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Teléfono de casa o celular">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Correo electrónico">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Correo electrónico">
            </div>
            <div class="form-group">
              <select class="custom-select">
                <option selected>Asunto (Elige Uno)</option>
                <option value="Empleo">Empleo</option>
                <option value="Cotización">Cotización</option>
                <option value="Otro">Otro</option>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Empresa">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Teléfono Oficina">
            </div>
            <div class="form-group">

            </div>
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
          </form>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="text-blue text-uppercase"><strong>Lorem ipsum</strong></h3>
              <p class="text-muted">
                Bosque de Ciruelos 130 PH1201, Miguel Hidalgo,
                Ciudad de México, CP 11700, México
              </p>
              <ul class="list-unstyled text-small">
                <li><i class="fa fa-phone grey-color mr-3" aria-hidden="true"></i><a class="text-muted" href="tel:22241607">22241607</a></li>
                <li><i class="fa fa-envelope grey-color mr-3" aria-hidden="true"></i><a class="text-muted" href="mailto:contacto@dinkbit.com">contacto@dinkbit.com</a></li>
              </ul>
            </div>
            <div class="col-lg-12">
              <h3 class="text-blue text-uppercase"><strong>dinkbit</strong></h3>
              <ul class="list-unstyled text-small">
                <li><i class="fa fa-phone grey-color mr-3" aria-hidden="true"></i><a class="text-muted" href="tel:22241607">22241607</a></li>
                <li><i class="fa fa-envelope grey-color mr-3" aria-hidden="true"></i><a class="text-muted" href="mailto:hacemoscosasincreibles@dinkbit.com">hacemoscosasincreibles@dinkbit.com</a></li>
              </ul>
            </div>
            <div class="col-lg-12">
              <h3 class="text-blue text-uppercase"><strong>Síguenos en:</strong></h3>
              <ul class="list-inline text-small">
                <li class="list-inline-item mr-4"><a href="https://www.facebook.com/dinkbit"><i class="fa fa-facebook fa-2x grey-color" aria-hidden="true"></i></a></li>
                <li class="list-inline-item mr-4"><a href="https://twitter.com/dinkbit"><i class="fa fa-twitter fa-2x grey-color" aria-hidden="true"></i></a></li>
                <li class="list-inline-item mr-4"><a href="https://mx.linkedin.com/company/dinkbit"><i class="fa fa-linkedin fa-2x grey-color" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
