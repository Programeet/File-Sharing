@extends ('layouts.admin')

@section('title')
    <title>Panel de administración</title>
@endsection

@section('titulo_contenido')
    Administrador
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{count($usuarios)}}</div>
                        <div>Usuarios!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{count($archivos)}}</div>
                        <div>Archivos</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-music fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{count($generos)}}</div>
                        <div>Generos</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-info-circle fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                         <?php $sum = 0; ?>
                         @foreach($archivos as $archivo)
                           <?php $sum += $archivo->size; ?>
                        @endforeach
                        <div class="huge">{{$sum}}</div>
                        <div>Espacio usado!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        Todos los archivos
    </div>
    <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Subido por</th>
                  <th>Descargas</th>
                  <th>Tamaño</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
              @foreach($archivos as $data)
              <tr>
                <td>{{$data->nombre}}</td>
                <td><a href="{{route('usuario', ['usuario'=> $data->usuario->id])}}">{{$data->usuario->nick}}</a></td>
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
