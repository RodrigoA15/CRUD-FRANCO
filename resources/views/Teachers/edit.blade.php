@extends('Templete.Templete')
@section('plantillaweb')
{{-- <h1>Editar Profesor No {{$teacher->teacher}}</h1> --}}
<form action="{{route('profesores.update', $teacher)}}" method="POST"> 
    @method('PUT')
    {{ csrf_field() }}  
    <div class="col-lg-6 col-md-4 col-sm-2">
      <label for="exampleInputEmail1" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" value="{{$teacher->nombre}}">
    </div>
    <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="apellido" value="{{$teacher->apellido}}">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="direccion" value="{{$teacher->direccion}}">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Correo</label>
        <input type="text" class="form-control" name="correo" value="{{$teacher->correo}}">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono" value="{{$teacher->telefono}}">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Nivel Academico</label>
        <input disabled="disabled" type="text" class="form-control" name="nivel_academico" value="{{$teacher->nivel_academico}}">
        <br>
        <select class="form-select" name="nivel_academico" >
            <option value="1">Bachiller Academico y/o comercial</option>
            <option value="2">Tecnico</option>
            <option value="3">Tecnologo</option>
            <option value="4">Profesion</option>
            <option value="5">Magister</option>
            <option value="6">Doctorado</option>


        </select>
      </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
@endsection