@extends ('layouts.principal')
@section('title')
<title>Descarga: {{$data->nombre}}</title>
@stop
@section('content')
  <div class="backit">
    <h2>{{ $data->nombre }}</h2>
  </div>
    <div class="row">
      <div class="col-md-6">
        <img src="De algún lado sale" alt="Nombre de la canción"  title="Nombre de la canción" width="500" height="500" class="cover">
      </div>
      <div class="col-md-6">
        <div class="info-col">
          <div class="">
            <span class="glyphicon glyphicon-music"></span> Nombre de la canción: {{ $data->nombre }}
          </div>
          <div class="">
            <span class="glyphicon glyphicon-time"></span> Lanzamiento: {{ $data->fecha_subida }}
          </div>
          <div class="">
            <span class="glyphicon glyphicon-download"></span><span id="dcount"></span> Descargas: {{ $data->numero_descargas }}
          </div>
          <div class="">
            <span class="glyphicon glyphicon-barcode"></span> Tamaño: {{ $data->size }}
          </div>
          <div class="">
            <span class="glyphicon glyphicon-tag"></span> Genero: {{ $data->genero->nombre }}
          </div>
          <div class="">
            <span class="glyphicon glyphicon-user"></span> Subido por: <a href="#SubidasUsuario">{{ $data->usuario->nick }}</a>
          </div>
        </div>
        <audio controls="controls">
          <source src="https://r2---sn-0ox-jube.googlevideo.com/videoplayback?id=5030296615d3a47f&itag=139&source=youtube&requiressl=yes&pl=18&ms=au&ei=D82QWee6I9y1-QW4qr7gAg&mn=sn-0ox-jube&mm=31&mv=m&initcwndbps=446250&ratebypass=yes&mime=audio/mp4&gir=yes&clen=1788711&lmt=1480659791279187&dur=300.651&mt=1502661832&signature=2F91AD299896EEEC597DDA9EB3200C567ECB500C.10F27A2163B1AC9BD39D6E83CF5856996899CB9D&key=dg_yt0&ip=181.133.236.183&ipbits=0&expire=1502683503&sparams=ip,ipbits,expire,id,itag,source,requiressl,pl,ms,ei,mn,mm,mv,initcwndbps,ratebypass,mime,gir,clen,lmt,dur" type="audio/mpeg" />
        </audio>
        <button type="button" name="button">Descargar</button>
      </div>
      <div class="col-md-12">
        <div class="backit">
          <h3>Mas canciones del genero <b>{{$data->genero->nombre}}</b></h3>
        </div>
        <div class="related">
          <ul>
            <?php foreach ($archivos_genero as $key): ?>
              <?php if ($key->id != $data->id): ?>
                  <li><a href="{{ route('descarga', ['id' => $key->id]) }}">{{$key->nombre}}</a></li>
              <?php endif; ?>

            <?php endforeach; ?>
          </ul>

        </div>
      </div>
    </div>

@stop
