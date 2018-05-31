@extends('layouts.app')

@section('content')
  <section class="image-heeder" style="background-image:url(img/headers/header-cotizador.jpg)">
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
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="row">
            <div class="col-lg-12">
              <h3>Lorem ipsum</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
            <div class="col-lg-12">
              <h3>Lorem ipsum</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
            <div class="col-lg-12">
              <h3>Lorem ipsum</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header bg-white">
              Arraste los botones de abajo para el monto que desea pedir prestado y en cuantas quincenas
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <p>Monto</p>
                  <input type="range" class="form-control" min="5000" max="20000" value="5000" step="5000" id="sliderRode">
                </div>
                <div class="col-lg-12">
                  <p>Quincenas</p>
                  <input type="range" class="form-control" min="8" max="12" value="8" step="2" id="sliderFortnight">
                </div>
              </div>
            </div>
            <div class="card-footer text-muted">
              <div class="row">
                <div class="col-lg-4 col-sm-12">
                  <h4>Monto</h4>
                  <label for="" id="labelRode">$5,000.00</label>
                </div>
                <div class="col-lg-4 col-sm-12">
                  <h4>Quincenas</h4>
                  <label for="" id="labelFortnight">8</label>
                </div>
                <div class="col-lg-4 col-sm-12">
                  <h4>Pagos</h4>
                  <label for="" id="labelPayment">$1,849.82</label>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <button type="button" class="btn btn-success btn-lg form-control">Obtenga su dinero ahora</button>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      Ver tabla de amortización
                    </div>
                    <div class="card-body">
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">No. de Pago</th>
                            <th scope="col">Saldo insoluto</th>
                            <th scope="col">Amortización</th>
                            <th scope="col">Interés</th>
                            <th scope="col">IVA</th>
                            <th scope="col">Pago</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('js')
  <script>
  var sliderRode = document.getElementById("sliderRode");
  var sliderFortnight = document.getElementById("sliderFortnight");
  // Values of slides
  var valueRode = sliderRode.value;
  var valueFortnight = sliderFortnight.value;
  $(document).ready(function() {
    // get table of amortization
    generateTableAmortization(valueRode, valueFortnight);
  });

  sliderRode.oninput = function() {
    var labelRode = document.getElementById("labelRode");

    labelRode.innerHTML = '$' + this.value;
    console.log(this.value);
    valueRode = this.value;
    // get table of amortization
    generateTableAmortization(valueRode, valueFortnight);
  }

  sliderFortnight.oninput = function() {
    var labelFortnight = document.getElementById("labelFortnight");
    labelFortnight.innerHTML = this.value;
    console.log(this.value);
    valueFortnight = this.value;
    // get table of amortization
    generateTableAmortization(valueRode, valueFortnight);
  }

  function generateTableAmortization(rode, fortnight) {
    console.log('monto: ' + rode + ', Quincena: ' + fortnight );
    axios({
      method: 'POST',
      url: 'generate-table-amortization',
      data: {
        rode: rode,
        fortnight: fortnight
      }
    }).then( response => {
      console.log(response);
    })
  }

</script>
@endsection
