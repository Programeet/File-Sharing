@extends ('layouts.principal')
@section('title')
 <title>{{ env('APP_NAME') }}</title>
@stop
@section('content')
<table class="table">
    <tr>
      <td>
        <li><b>Canciones</b></li>
      </td>
      <td>
        <li><b>Descargar</b></li>
      </td>
    </tr>
  @foreach($canciones as $cancion)
  <tr>
    <td>
      <li><a href="{{ route('descarga', ['id' => $cancion->id]) }}">{{ $cancion->nombre }}</a></li>
    </td>
    <td>
      <li><a href="#AhiVemos"><span class="glyphicon glyphicon-download"></span>  DESCARGAR</a></li>
    </td>
  </tr>
  @endforeach
</table>

{{ $canciones->render() }} @stop
