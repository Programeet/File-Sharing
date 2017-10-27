@extends ('layouts.admin')

@section('title')
    <title>Panel de administración</title>
@endsection

@section('titulo_contenido')
  Nuevo archivo
@endsection

@section('contenido')
  <form class="" action="{{route('file.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <div class="form-group">
          <label>Selects</label>
          <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
          </select>
      </div>

    </div>
    <div class="form-group">
      <label>File input</label>
      <input type="file" name="file" id="file">
    </div>

    <button type="submit" class="btn btn-primary">Subir</button>
  </form>
@stop
