 <!-- Navigation -->
 <nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle nav</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- Logo text or image -->
      <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('img/logo_ja.png')}}" style="margin-top:-8px;"></a>

    </div>
    <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav" style="letter-spacing: 1px">
        <li class="current"><a href="#carousel-example-generic2">Inicio</a></li>
        <li><a href="#nosotros">Nosotros</a></li>
        <li><a href="#servicios">Servicios</a></li>
        <li><a href="#galeria">Galería</a></li>
        <li><a href="#promociones">Promociones</a></li>
        <li><a href="#contacto">Contacto</a></li>
        @if(\Auth::user())
          <li><a href="{{url('/admin')}}">Admin</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>