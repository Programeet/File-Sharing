<!DOCTYPE html>
<html lang="es">
<head>
  <title>Inicio</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-2.1.1-rc2.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
  <div class="container-main">
    <div id="topnav" class="clearfix">
      <a href="#" class="logo">
        <img src="img/logo.png" alt="">
      </a>

        <form id="searchform" action="/" method="get">
          <input type="text" name="buscar" id="searchfield" placeholder="Buscar" required>
          <button type="submit">
            <i class="fa fa-search"></i>
          </button>
        </form>
        <div class="dropdown">
    <button class="dropbtn">Dropdown</button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
    </div>
    <div class="row">
      <table>
      </table>
    </div>

  @yield('content')
  <footer>
  </footer>
  </div>

</body>
</html>
