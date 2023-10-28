<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Repaso  Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('apodoInicio')?'text-danger':''}}" aria-current="page" href="/">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('apodoFormulario')?'text-warning':''}}" href="/formulario">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('apodoRecuerdos')?'text-success':''}}">Libros</a>
          </li>
        </ul>
      </div>
    </div>
</nav>