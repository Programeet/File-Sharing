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
                        <div class="huge">26</div>
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
                        <div class="huge">124</div>
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
                        <div class="huge">13</div>
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

<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Subido por</th>
                                        <th>Descargas</th>
                                        <th>Tamaño</th>
                                        <th>Descarga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($archivos as $data)
                                  <tr>
                                    <td>{{$data->nombre}}</td>
                                    <td><a href="{{route('usuario', ['usuario'=> $data->usuario->id])}}">{{$data->usuario->nick}}</a></td>
                                    <td>{{ $data->numero_descargas}}</td>
                                    <td>{{$data->size}} Mb</td>
                                    <td><a href="{{route('descarga', ['descarga'=>$data->id])}}" class="btn btn-default">Enlace</a></td>
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
@stop
