@extends ('layouts.principal')

@section('title')
 <title>Usuario: {{$usuario}}</title>
@stop

@section('content')
<div class="blackit">
  <h2>Archivos de: {{ $usuario }}</h2>
</div>
<table class="table">
  <thead>
    <tr>
      <td>Nombre de la canción</td><td>Descarga Directa</td>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($archivos as $key): ?>
      <tr>
        <td><a href="<?= URL::to('/').'/'. $key->id ?>"><?=$key->nombre ?></a></td><td><?= $key->id ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
@stop
