@extends ('layouts.admin')

@section('title')
    <title>Panel de administración</title>
@endsection

@section('titulo_contenido')
    <h1 class="page-header">Página inicial</h1>
@endsection

@section('contenido')
    <b>Esta es de admin</b>
    <ol>
        @foreach($archivos as $archivo)
            <li>{{ $archivo->nombre }}</li>
        @endforeach 
    </ol>
@stop