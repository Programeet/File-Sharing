@extends ('layouts.admin')

@section('title')
    <title>Mis archivos</title>
@endsection

@section('titulo_contenido')
    Mis archivos
@endsection

@section('contenido')
  <div class="row">

  </div>
<div class="panel panel-default">
    <div class="panel-heading">
        Mis archivos
    </div>
    <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Descargas</th>
                  <th>Tamaño</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
              @foreach($files as $data)
              <tr>
                <td>{{$data->nombre}}</td>
                <td>{{ $data->numero_descargas}}</td>
                <td>{{$data->size}} Mb</td>
                <td><a href="{{route('descarga', ['descarga'=>$data->id])}}" class="btn btn-primary" >Ver</a>   <a href="#" class="btn btn-success">Editar</a>   <a href="#" class="btn btn-danger">Borrar</a> </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('requirejs')
  <!-- Metis Menu Plugin JavaScript -->
  <script src="../vendor/metisMenu/metisMenu.min.js"></script>

  <!-- DataTables JavaScript -->
  <script src="{{asset('plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-responsive/dataTables.responsive.js')}}"></script>
  <script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>
@endsection
