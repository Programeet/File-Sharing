<!DOCTYPE html>

<html lang="es">
<head>
  <!-- <title>Inicio</title> -->
  @yield('title')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="http://code.jquery.com/jquery-2.1.1-rc2.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<body>
  <div class="container-main">
    <div id="topnav" class="clearfix">
      <a href="/" class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="">
      </a>

      <form id="searchform" action="{{ route('search') }}" method="get">
        <input type="text" name="buscar" id="searchfield" placeholder="Buscar" required>
        <button type="submit">
            <i class="fa fa-search"></i>
          </button>
      </form>
      <div class="dropdown">
        <button class="dropbtn">Generos</button>
        <div class="dropdown-content">
        @foreach(App\Http\Controllers\FrontController::generos() as $genero)
            <a href="{{ route('genero', ['genero' => $genero->id]) }}">{{ $genero->nombre }}</a>
        @endforeach
        </div>
      </div>
    </div>
    @yield('content')
<footer>
Develop and Design By:<a href="https://twitter.com/programeet" target="_blank">Programeet</a> &copy;
</footer>
</div>


</body>

</html>
