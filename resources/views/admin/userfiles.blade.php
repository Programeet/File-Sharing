@extends ('layouts.admin')

@section('title')
    <title>Panel de administración</title>
@endsection

@section('titulo_contenido')
    Archivos de: {{$user->nick}}
@endsection

@section('contenido')
  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
      <thead>
          <tr>
              <th>Nombre</th>
              <th>Genero</th>
              <th>Fecha de subida</th>
              <th>Descargas</th>
              <th>Tamaño</th>
              <th>Accion</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($user->archivos as $file)
          <tr class="even gradeA">
              <td>{{$file->nombre}}</td>
              <td>{{$file->genero->nombre}}</td>
              <td>{{$file->fecha_subida}}</td>
              <td>{{$file->numero_descargas}}</td>
              <td>{{$file->size}}</td>
              <td><a href="{{route('descarga', ['id'=>$file->id])}}" class="btn btn-primary" >Enlace</a>   <a href="#" class="btn btn-success">Editar</a>   <a href="#" class="btn btn-danger">Borrar</a> </td>
          </tr>
        @endforeach

      </tbody>
  </table>
  <!-- /.table-responsive -->
@stop
