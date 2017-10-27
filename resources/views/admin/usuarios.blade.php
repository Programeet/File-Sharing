@extends ('layouts.admin')

@section('title')
    <title>Panel de administración</title>
@endsection
@section('titulo_contenido')
    Usuarios
@endsection
@section('contenido')
<div class="row">

</div>
<div class="panel panel-default">
    <div class="panel-heading">
        Todos los usuarios
    </div>
    <div class="panel-body">
      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
              <tr>
                  <th>Usuario</th>
                  <th>Correo</th>
                  <th>Número de Archivos</th>
                  <th>Opciones</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr class="gradeA">
                  <td>{{$user->nick}}</td>
                  <td>{{$user->email}}</td>
                  <td><a href="{{route('user_files', ['id'=>$user->id])}}">{{count($user->archivos)}}</a></td>
                  <td class="center"><a href="#" class="btn btn-success">Editar</a>   <a href="#" class="btn btn-danger">Borrar</a> </td>
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
