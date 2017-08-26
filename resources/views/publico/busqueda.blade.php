@extends ('layouts.principal')
@section('title')
<title>Busqueda: {{ $buscado }}</title>
@stop

@section('content')
<div class="blackit">
  <h2>Resultado de busqueda: {{ $buscado }}</h2>
</div>
<table class="table">
  <thead>
    <tr>
      <td>Nombre de la canción</td><td>Descarga Directa</td>
    </tr>
  </thead>
  <tbody>
    @foreach ($busqueda as $key)
      <tr>
        <td><a href="{{ route('descarga', ['id'=>$key->id]) }}">{{ $key->nombre }}</a></td><td><a href="#AhiVemos"><span class="glyphicon glyphicon-download"></span>  DESCARGAR</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
@stop