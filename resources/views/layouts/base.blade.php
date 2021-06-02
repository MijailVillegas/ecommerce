<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Desarrollo de sitemas</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-sixteen.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    @livewireStyles

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Desarrollo <em>De Sistemas</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="/shop">Tienda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/cart">Carrito</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/checkout">Verificar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/aboutus">Acerca De</a>
              </li>

              @if(Route::has('login'))
                @auth
                @if(Auth::user()->utype === 'ADM')
                <div class="content">
                    <li class="nav-item">
                      <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Mi cuenta ({{Auth::user()->name}})</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                    </li>
                    <form id="logout-form" method="POST" action="{{route('logout')}}">
                      @csrf
                    </form>
                </div>
                @else
                <div class="content">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Mi cuenta ({{Auth::user()->name}})</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                  </li>
                    <form id="logout-form" method="POST" action="{{route('logout')}}">
                      @csrf
                    </form>
                </div>
                @endif
                @else
                <li>
                  <a class="nav-link" href="{{route('login')}}">Log in</a>
                </li>
                <li>
                  <a class="nav-link" href="{{route('register')}}">Registrar</a>
                </li>
                @endauth               
              @endif
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
          <div class="banner-item-01">
            <div class="text-content">
              <h4>LAS MEJORES OFERTAS</h4>
              <h2>Nuevos Productos a La venta</h2>
            </div>
          </div>
          <div class="banner-item-02">
            <div class="text-content">
              <h4>Los mejores tratos</h4>
              <h2>Obten los mejores productos</h2>
            </div>
          </div>
          <div class="banner-item-03">
            <div class="text-content">
              <h4>Hasta lo último</h4>
              <h2>Consigue ofertas de última hora</h2>
            </div>
          </div>
        </div>
      </div>

{{$slot}}
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <script src="{{('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/owl.js')}}"></script>
    <script src="{{asset('assets/js/slick.js')}}"></script>
    <script src="{{asset('assets/js/isotope.js')}}"></script>
    <script src="{{asset('assets/js/accordions.js')}}"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
    @livewireScripts
  </body>

</html>
