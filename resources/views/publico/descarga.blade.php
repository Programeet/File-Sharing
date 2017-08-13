@extends ('layouts.principal')
@section('content')
  <div class="backit">
    <h2>Titulo de la cancion</h2>
  </div>
    <div class="row">
      <div class="col-md-6">
        <img src="De algún lado sale" alt="Nombre de la canción"  title="Nombre de la canción" width="500" height="500" class="cover">
      </div>
      <div class="col-md-6">
        <div class="info-col">
          <div class="">
            <span class="glyphicon glyphicon-music"></span> Nombre de la canción:
          </div>
          <div class="">
            <span class="glyphicon glyphicon-time"></span> Lanzamiento:
          </div>
          <div class="">
            <span class="glyphicon glyphicon-download"></span><span id="dcount"></span> Descargas:
          </div>
          <div class="">
            <span class="glyphicon glyphicon-barcode"></span> Tamaño:
          </div>
          <div class="">
            <span class="glyphicon glyphicon-tag"></span> Genero:
          </div>
          <div class="">
            <span class="glyphicon glyphicon-user"></span> Subido por: <a href="#SubidasUsuario">Usuario</a>
          </div>
        </div>
        <audio controls="controls">
          <source src="https://r2---sn-0ox-jube.googlevideo.com/videoplayback?id=5030296615d3a47f&itag=139&source=youtube&requiressl=yes&pl=18&ms=au&ei=D82QWee6I9y1-QW4qr7gAg&mn=sn-0ox-jube&mm=31&mv=m&initcwndbps=446250&ratebypass=yes&mime=audio/mp4&gir=yes&clen=1788711&lmt=1480659791279187&dur=300.651&mt=1502661832&signature=2F91AD299896EEEC597DDA9EB3200C567ECB500C.10F27A2163B1AC9BD39D6E83CF5856996899CB9D&key=dg_yt0&ip=181.133.236.183&ipbits=0&expire=1502683503&sparams=ip,ipbits,expire,id,itag,source,requiressl,pl,ms,ei,mn,mm,mv,initcwndbps,ratebypass,mime,gir,clen,lmt,dur" type="audio/mpeg" />
        </audio>
        <button type="button" name="button">Descargar</button>
      </div>
      <div class="col-md-12">
        <div class="backit">
          <h3>Mas canciones del genero {genero}</h3>
        </div>
        <div class="related">
          <ul>
            <li><a href="#">Related 1</a></li>
            <li><a href="#">Related 2</a></li>
            <li><a href="#">Related 3</a></li>
            <li><a href="#">Related 4</a></li>
            <li><a href="#">Related 5</a></li>
            <li><a href="#">Related 6</a></li>
          </ul>

        </div>
      </div>
    </div>

@stop
