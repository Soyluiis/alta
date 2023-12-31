<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
  <div class="container">
    <div class="navbar-wrapper">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('material/img/validablanco.png') }}" alt="" height="50">
        </a>
      </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
                <i class="material-icons">web</i> {{ __('Login') }}
              </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('ingresar-folio') }}" class="nav-link">
                <i class="material-icons">outbound</i> {{ __('Ingreso con Folio') }}
            </a>
        </li>

        <!-- <li class="nav-item">
    <a href="{{ route('register') }}" class="nav-link">
        <i class="material-icons">assignment</i> {{ __('Registro') }}
    </a>
</li> -->


        <li class="nav-item ">
          <a href="https://www.validacarga.com/Default.aspx" class="nav-link">
            <i class="material-icons">computer</i> {{ __('Portal') }}
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
