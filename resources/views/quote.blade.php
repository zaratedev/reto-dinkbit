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
                      <div class="table-responsive">
                        <table class="table table-sm" id="tableAmortization">
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
                          <tbody id="tbody">
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
      <hr>
      <div class="row">
        <div class="col-lg-12 mt-2 mb-2">
          <img src="{{ asset('img/elements/sq-check-xs.png')}}" class="img-fluid d-inline" alt="Lorem ipsum">
          <p class="font-samll text-secondary d-inline">
            Lorem ipsum <span class="text-blue">82.86%</span>
          </p>
        </div>
        <div class="col-lg-12 mt-2 mb-2">
          <img src="{{ asset('img/elements/sq-check-xs.png')}}" class="img-fluid d-inline" alt="Lorem ipsum">
          <p class="font-samll text-secondary d-inline">
            Lorem ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
          </p>
        </div>
        <div class="col-lg-12 mt-2 mb-2">
          <img src="{{ asset('img/elements/sq-check-xs.png')}}" class="img-fluid d-inline" alt="Lorem ipsum">
          <p class="font-samll text-secondary d-inline">
            Lorem <span class="text-blue">136.46%</span> ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem ipsum ha sido el texto <span class="text-blue">01/10/2015</span>
          </p>
        </div>
        <div class="col-lg-12 mt-2 mb-2">
          <img src="{{ asset('img/elements/sq-check-xs.png')}}" class="img-fluid d-inline" alt="Lorem ipsum">
          <p class="font-samll text-secondary d-inline">
            Lorem ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
          </p>
        </div>
        <div class="col-lg-12 mt-2 mb-2">
          <img src="{{ asset('img/elements/sq-check-xs.png')}}" class="img-fluid d-inline" alt="Lorem ipsum">
          <p class="font-samll text-secondary d-inline">
            Lorem ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('js')
  <script src="{{ asset('js/quote.js')}}"></script>
@endsection
