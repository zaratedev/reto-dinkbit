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
          @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
              {{ session('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          <form class="needs-validation" novalidate action="{{ url('/send-email') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nombre" required>
              <div class="invalid-feedback">
                Por favor ingresa el campo Nombre
              </div>

              @if ($errors->has('name'))
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                  {{ $errors->first('name') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
				      @endif
            </div>
            <div class="form-group">
              <input type="text" name="lastName" value="{{ old('lastName') }}" class="form-control" placeholder="Apellidos" required>
              <div class="invalid-feedback">
                Por favor ingresa el campo Apellidos
              </div>
              @if ($errors->has('lastName'))
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                  {{ $errors->first('lastName') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
				      @endif
            </div>
            <div class="form-group">
              <input type="text" name="cellPhone" value="{{ old('cellPhone') }}" class="form-control" placeholder="Teléfono de casa o celular" required>
              <div class="invalid-feedback">
                Por favor ingresa el campo Teléfono de casa o celular
              </div>
              @if ($errors->has('cellPhone'))
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                  {{ $errors->first('cellPhone') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
				      @endif
            </div>
            <div class="form-group">
              <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Correo electrónico" required>
              <div class="invalid-feedback">
                Por favor ingresa el campo Correo electrónico
              </div>
              @if ($errors->has('email'))
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                  {{ $errors->first('email') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
				      @endif
            </div>
            <div class="form-group">
              <select name="affair" class="custom-select" required>
                <option value="" selected>Asunto (Elige Uno)</option>
                <option value="Empleo">Empleo</option>
                <option value="Cotización">Cotización</option>
                <option value="Otro">Otro</option>
              </select>
              <div class="invalid-feedback">Por favor selecciona una opción</div>
            </div>
            <div class="form-group">
              <input type="text" name="company" value="{{ old('company') }}" class="form-control" placeholder="Empresa" required>
              <div class="invalid-feedback">
                Por favor ingresa el campo Empresa
              </div>
              @if ($errors->has('company'))
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                  {{ $errors->first('company') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
				      @endif
            </div>
            <div class="form-group">
              <input type="text" name="officePhone" value="{{ old('officePhone') }}" class="form-control" placeholder="Teléfono Oficina" required>
              <div class="invalid-feedback">
                Por favor ingresa el campo Teléfono Oficina
              </div>
              @if ($errors->has('officePhone'))
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                  {{ $errors->first('officePhone') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
				      @endif
            </div>
            <div class="form-group">
              <textarea name="message" value="{{ old('message') }}" rows="3" cols="80" class="form-control" placeholder="Mensaje" required></textarea>
              <div class="invalid-feedback">
                Por favor ingresa el campo Mensaje
              </div>
              @if ($errors->has('message'))
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                  {{ $errors->first('message') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
				      @endif
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
  <section class="pt-5 pb-5">
    <div class="container">
      <div id="map"></div>
    </div>
  </section>
@endsection
@section('js')
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTddhn69O0b1iQblWsTexggyLdD3wWzqg"></script>
  <script src="{{ asset('js/maps.js') }}"></script>
  <script type="text/javascript">
    // Validate starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
      }, false);
    })();
  </script>
@endsection
