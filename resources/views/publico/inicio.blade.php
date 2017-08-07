@extends ('layouts.principal') @section('content')
<table class="table">
  <thead>
    <tr>
      <td>
        <li><a href="">Canciones</a></li>
      </td>
      <td>
        <li><a href="">Descargar</a></li>
      </td>
    </tr>
  </thead>
  @foreach($canciones as $cancion)
  <tr>
    <td>
      <li><a href="#Link">{{ $cancion->nombre }}</a></li>
    </td>
    <td>
      <li><a href="#AhiVemos">Descargar</a></li>
    </td>
  </tr>
  @endforeach
</table>

{{ $canciones->render() }} @stop
